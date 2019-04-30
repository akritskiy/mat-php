<?php
require_once('partials/header.php');
require_once('config/db.php');
require_once('resources/formatDateCreated.php');

$s = $_SESSION;
if (!isset($s['uid']) || !isset($s['email']) || !isset($s['username'])) {
	// If any of [uid, email, username] are not set, redirect to login
	header("location: login.php?auth_required");
	exit();
}

$g = $_GET;
if (!isset($g['user'])) {
	header("location: profile.php");
}

/** Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mp | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */
function get_gravatar($email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array())
{
	$url = 'https://www.gravatar.com/avatar/';
	$url .= md5(strtolower(trim($email)));
	$url .= "?s=$s&d=$d&r=$r";
	if ($img) {
		$url = '<img src="' . $url . '"';
		foreach ($atts as $key => $val)
			$url .= ' ' . $key . '="' . $val . '"';
		$url .= ' />';
	}
	return $url;
}

$username = $g['user'];

// get user object from DB
$q = "SELECT * FROM users WHERE username='$username' LIMIT 1;";
$user = mysqli_fetch_assoc(mysqli_query($conn, $q));
$uid = $user['id'];
// get profile object from DB
$q = "SELECT * FROM profiles WHERE userID='$uid' LIMIT 1;";
$profile = mysqli_fetch_assoc(mysqli_query($conn, $q));

// items to render to DOM
$grav_url = get_gravatar($user['email'], '150', 'retro', 'pg');
$dateCreated = formatDateCreated($user['created_at']);
// display name
$dispName = $user['username']; // defaults to username if display name not set
if ($profile['dispName']) $dispName = $profile['dispName'];
// social media
$fb = $profile['fb'];
$insta = $profile['insta'];
$twitter = $profile['twitter'];
$reddit = $profile['reddit'];
$twitch = $profile['twitch'];
$youtube = $profile['youtube'];
// gamer tags
$steam = $profile['steam'];
$ps = $profile['ps'];
$xbox = $profile['xbox'];
$nintendo = $profile['nintendo'];
$gamerTagsPlaceholder = null;
if (!$steam && !$ps && !$xbox && !$nintendo) $gamerTagsPlaceholder = '<p>No gamer tags provided.</p>';
// bio
$bio = $profile['bio'];
if (!$bio) $bio = 'No bio provided.';
// games played
$uid = $user['id'];
$q = "SELECT game FROM matchrequests WHERE userID='$uid';";
$res = mysqli_fetch_all(mysqli_query($conn, $q), MYSQLI_ASSOC);
$gamesPlayed = 'No games played.';
if ($res) {
	$gamesPlayed = '';
	foreach ($res as $r) {
		$gamesPlayed = $gamesPlayed . $r['game'] . ", ";
	}
}
// messages
$profileUpdatedMsg = null;
if (isset($_GET['updated'])) $profileUpdatedMsg = "<div class='alert alert-success text-center mx-auto' style='width: fit-content;'>Profile updated.</div>";
$passwordChangedMsg = null;
if (isset($_GET['password_changed'])) $passwordChangedMsg = "<div class='alert alert-success text-center mx-auto' style='width: fit-content;'>Password changed.</div>";
?>

<div class="row">
	<div class="col-xl-6 col-lg-10 col-md-12 col-sm-12 col-xs-12 mx-auto">
		<div class="card lightCard">
			<div class="card-header text-center">Public Profile</div>
			<div class="card-body profileCardBody">
				<div class="row">
					<!-- col 1 -->
					<div class="col-xs-12 col-sm-12 col-md-6 text-center">
						<!-- Profile pic -->
						<div class="profileDiv gravatarDiv">
							<img src="<?php echo $grav_url; ?>" alt="Gravatar profile pic" class="gravatar" />
							<p><i class="fas fa-user-astronaut"></i><?php echo $dispName; ?></p>
							<p>Set your profile picture through <a href="https://en.gravatar.com/">Gravatar</a>.</p>
						</div>
						<!-- Email -->
						<div class="profileDiv">
							<h5>Email</h5>
							<p><i class="fas fa-envelope-square"></i><?php echo $s['email']; ?></p>
						</div>
						<!-- Bio -->
						<div class="profileDiv">
							<h5>Bio</h5>
							<p><?php echo $bio; ?></p>
						</div>
					</div>
					<!-- col 2 -->
					<div class="col-xs-12 col-sm-12 col-md-5 offset-md-1">
						<!-- Gamer Tags -->
						<div class="profileDiv">
							<h5>Gamer Tags</h5>
							<?php if ($gamerTagsPlaceholder) echo $gamerTagsPlaceholder; ?>
							<?php if ($steam) echo "<p><i class='fab fa-steam-square'></i>$steam</p>"; ?>
							<?php if ($ps) echo "<p><i class='fab fa-playstation'></i>$ps</p>"; ?>
							<?php if ($xbox) echo "<p><i class='fab fa-xbox'></i>$xbox</p>"; ?>
							<?php if ($nintendo) echo "<p><i class='fab fa-nintendo-switch'></i>$nintendo</p>"; ?>
						</div>
						<!-- Social Media -->
						<div class="profileDiv">
							<h5>Social Media</h5>
							<?php if ($fb) echo "<p><i class='fab fa-facebook'></i><a href='https://www.facebook.com/$fb'>$fb</a></p>"; ?>
							<?php if ($insta) echo "<p><i class='fab fa-instagram'></i><a href='https://www.instagram.com/$insta'>$insta</a></p>"; ?>
							<?php if ($twitter) echo "<p><i class='fab fa-twitter-square'></i><a href='https://www.twitter.com/$twitter'>$twitter</a></p>"; ?>
							<?php if ($reddit) echo "<p><i class='fab fa-reddit-square'></i><a href='https://www.reddit.com/user/$reddit'>$reddit</a></p>"; ?>
							<?php if ($twitch) echo "<p><i class='fab fa-twitch'></i><a href='https://www.twitch.tv/$twitch'>$twitch</a></p>"; ?>
							<?php if ($youtube) echo "<p><i class='fab fa-youtube-square'></i><a href='https://www.youtube.com/user/$youtube'>$youtube</a></p>"; ?>
						</div>
						<!-- Games played -->
						<div class="profileDiv">
							<h5>Games Played</h5>
							<p><?php echo $gamesPlayed; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('partials/footer.php'); ?>