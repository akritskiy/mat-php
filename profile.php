<?php
require_once('partials/header.php');

if (!isset($_SESSION['uid']) || !isset($_SESSION['email']) || !isset($_SESSION['username'])) {
	// If any of [uid, email, username] are not set, redirect to login
	header("location: login.php?auth_required");
	exit();
}

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
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

$grav_url = get_gravatar($_SESSION['user']['email'], '100', 'retro', 'pg');

function displayDateCreated($datetime)
{
	$year = substr($datetime, 0, 4);
	$month = substr($datetime, 5, 2);
	$day = substr($datetime, 8, 2);

	switch ($month) {
		case '01':
			$month = 'January';
			break;
		case '02':
			$month = 'February';
			break;
		case '03':
			$month = 'March';
			break;
		case '04':
			$month = 'April';
			break;
		case '05':
			$month = 'May';
			break;
		case '06':
			$month = 'June';
			break;
		case '07':
			$month = 'July';
			break;
		case '08':
			$month = 'August';
			break;
		case '09':
			$month = 'September';
			break;
		case '10':
			$month = 'October';
			break;
		case '11':
			$month = 'November';
			break;
		case '12':
			$month = 'December';
			break;
	}

	echo "$month $day, $year";
}
?>

<div class="row">
	<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
		<div class="card lightCard">
			<div class="card-header text-center">Profile</div>
			<div class="card-body profileCardBody">
				<div class="row">
					<!-- 1st col -->
					<div class="col-sm-12 col-md-3">
						<!-- Profile pic -->
						<div class="profileDiv gravatarDiv">
							<img src="<?php echo $grav_url; ?>" alt="Gravatar profile pic" class="gravatar" />
							<p>@<?php echo $_SESSION['username']; ?></p>
							<p>Set your profile picture through <a href="https://en.gravatar.com/">Gravatar</a>.</p>
						</div>
						<!-- Info -->
						<div class="profileDiv">
							<h5>User Information</h5>
							<p><i class="fas fa-envelope"></i><?php echo $_SESSION['email']; ?></p>
							<p><i class="fab fa-facebook"></i>Link to fb</p>
							<p><i class="fab fa-instagram"></i>Link to insta</p>
							<p><i class="fab fa-twitter"></i>Link to twitter</p>
						</div>
					</div>
					<!-- 2nd col -->
					<div class="col-sm-12 col-md-5">
						<!-- Bio -->
						<div class="profileDiv">
							<h5>Bio</h5>
							<p>Cras accumsan enim in pulvinar pellentesque. Nam volutpat ante eros, dapibus venenatis enim dignissim non. Nulla ullamcorper urna vel nibh semper, sed varius sapien scelerisque. Pellentesque interdum placerat aliquam. Nam a neque eget nibh viverra pulvinar. Ut ut placerat nisi, et vehicula ex. Nulla libero lectus, sollicitudin eu sagittis a, maximus at velit.</p>
						</div>
						<!-- Games player -->
						<div class="profileDiv">
							<h5>Games Played</h5>
							<p>Dead by Daylight, Prop Hunt</p> <!-- placeholder -->
						</div>
					</div>
					<!-- 3rd col -->
					<div class="col-md-4 col-sm-12">
						<!-- Gaming preferences -->
						<div class="profileDiv">
							<h5>Gaming Preferences</h5>
							<p><a href="#" class="btn darkBtn">Retake Gaming Preferences Quiz</a></p>
						</div>
						<!-- Account mgmt -->
						<div class="profileDiv">
							<h5>Account Management</h5>
							<p>Account created: <?php displayDateCreated($_SESSION['user']['created_at']); ?></p>
							<p><a href="#" class="btn darkBtn">Edit Profile</a></p>
							<p><a href="#" class="btn darkBtn">Change Password</a></p>
						</div>
						<!-- Danger zone -->
						<div class="profileDiv">
							<h5>Danger Zone</h5>
							<p><a href="#" class="btn darkBtn">Delete Account</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('partials/footer.php'); ?>