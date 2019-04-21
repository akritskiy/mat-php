<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;

class Test extends TestCase
{
    /**
     * @var WebDriver\Remote\RemoteWebDriver
     */
    private $webDriver;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * init webdriver
     */
    public function setUp()
    {
        $desiredCapabilities = WebDriver\Remote\DesiredCapabilities::chrome();
        $desiredCapabilities->setCapability('trustAllSSLCertificates', true);
        $this->webDriver = WebDriver\Remote\RemoteWebDriver::create(
            $_SERVER['SELENIUM_HUB'],
            $desiredCapabilities
        );
        $this->baseUrl = $_SERVER['SELENIUM_BASE_URL'];
    }

    /** Test Case 1
     * Method testSuccessfulSignUp
     * @test
     */
    //Test that the Sign Up Function works correctly
    public function testSuccessfulSignUp()
    {
        // open | http://matchisuru2.herokuapp.com/ |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=FName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->click();
        // type | name=FName | Jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("Jane");
        // type | name=LName | Doe
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("Doe");
        // type | name=Email | jane@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("jane@gmail.com");
        // type | name=UserName | jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("jane");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?success', $url);
    }

    //Test Case 2
    //Test when the Last Name contains non-letters when signing up
    public function testInvalidLastNameInSignUpForm()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=FName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->click();
        // type | name=FName | John
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("John");
        // type | name=LName | Doe2334
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("Doe2334");
        // click | name=Email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->click();
        // type | name=Email | john@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("john@gmail.com");
        // type | name=UserName | john
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("john");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?Invalid', $url);
    }

    //Test Case 3
    //Test when the email given is already in the database when signing up
    public function testTakenEmailOnSignUpForm()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=FName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->click();
        // type | name=FName | john
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("john");
        // type | name=LName | doe
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("doe");
        // type | name=Email | jane@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("jane@gmail.com");
        // type | name=UserName | john
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("john");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?Email', $url);
    }

    //Test Case 4
    //Test when the email is not in the right format, such as name.gmail.com when signing up
    public function testInvalidEmailOnSignUpForm()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // type | name=FName | Pui
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("Pui");
        // click | name=LName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->click();
        // type | name=LName | Tam
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("Tam");
        // click | name=Email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->click();
        // type | name=Email | pui.gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("pui.gmail.com");
        // click | name=UserName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->click();
        // type | name=UserName | pui
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("pui");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?VEmail', $url);
    }

    //Test Case 5
    //Test when the given username is already in the database when signing up
    public function testTakenUsernameInSignUpForm()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=FName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->click();
        // type | name=FName | jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("jane");
        // type | name=LName | doe
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("doe");
        // type | name=Email | jane@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("jane@gmail.com");
        // click | name=UserName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->click();
        // type | name=UserName | jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("jane");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?User', $url);
    }

    //Test Case 6
    //Test when there are invalid characters in the first name field, such as Bob2341, in the sign up form
    public function testInvalidCharactersInFirstNameInSignUpForm()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=FName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->click();
        // type | name=FName | John2344
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("FName"))->sendKeys("John2344");
        // click | name=LName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->click();
        // type | name=LName | Doe
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("LName"))->sendKeys("Doe");
        // click | name=Email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->click();
        // type | name=Email | john@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("Email"))->sendKeys("john@gmail.com");
        // type | name=UserName | john
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("john");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?Invalid', $url);
    }

    //Test Case 7
    //Test when one or more of the sign up fields are empty
    public function testEmptySignUpFormFields()
    {
        // open | http://matchisuru2.herokuapp.com/ |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/");
        // click | link=Sign Up |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Sign Up"))->click();
        // click | name=signup |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("signup"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/signupdesign.php?empty', $url);
    }

    //Test Case 8
    //Test when the user tries to log in when an invalid username
    public function testInvalidLoginUsername()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Login"))->click();
        // click | name=UserName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->click();
        // type | name=UserName | john
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("john");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // sendKeys | name=password | ${KEY_ENTER}
        $this->keys("${KEY_ENTER}");
        // click | name=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("login"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/logindesign.php?U_Invalid', $url);
    }

    //Test Case 9
    //Test successful login
    public function testSuccessfulLogin()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Login"))->click();
        // click | name=UserName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->click();
        // type | name=UserName | jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("jane");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("login"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/account.php?Well', $url);
    }

    //Test Case 10
    //Test successful lout out after logging in
    public function testSucessfulLogOut()
    {
        // open | http://matchisuru2.herokuapp.com/index.php |
        $this->webDriver->get("http://matchisuru2.herokuapp.com/index.php");
        // click | link=Login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Login"))->click();
        // click | name=UserName |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->click();
        // type | name=UserName | jane
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("UserName"))->sendKeys("jane");
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("login"))->click();
        // click | name=logout |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("logout"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://matchisuru2.herokuapp.com/index.php', $url);
    }


    /** Test Case 11
     * Method: testInvalidEmailForResetPasswordField
     * Test when the player enters an invalid email address
     */
    public function testInvalidEmailForResetPasswordField()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | bob.gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("bob.gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Please enter a valid email address.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Please enter a valid email address.'])[1]/following::div[1]"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://localhost/mat-php/password_reset?email_not_found', $url);
    }


    /** Test Case 12
     * Method testNewAccountVerificationEmailSentSuccessfully
     * Test that the new account verification email is sent successfully
     */
    public function testNewAccountVerificationEmailSentSuccessfully()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=register |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("register"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=username |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->click();
        // type | name=username | pui
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->sendKeys("pui");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // type | name=password2 | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password2"))->sendKeys("password");
        // click | name=register |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("register"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='A verification email was sent to your email address. Verify your email to continue.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='A verification email was sent to your email address. Verify your email to continue.'])[1]/following::div[1]"))->click();
        $url = $this->getLocation();
        $this->assertEquals('http://localhost/mat-php/login.php?registration_successful', $url);
    }


    /** Test Case 13
     * Method testPasswordResetEmptyFields
     * Test when the player enters empty fields for the password reset fields
     */
    public function testPasswordResetEmptyFields()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | name=reset-password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("reset-password"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='There must be a password entered for each field.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='There must be a password entered for each field.'])[1]/following::div[1]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/complete_password_reset.php?empty_fields', $url);
    }

    /** Test Case 14
     * Method testPasswordSuccessfullyChanged
     * Test if the password has successfully changed by first logging in with an old password then logging in with the password
     */
    public function testPasswordSuccessfullyChanged()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // type | name=password2 | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password2"))->sendKeys("password");
        // click | name=reset-password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("reset-password"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Password has been reset. Please login.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Password has been reset. Please login.'])[1]/following::div[1]"))->click();
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | name=username |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->click();
        // type | name=username | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->sendKeys("puitm3@gmail.com");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password1
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password1");
        // click | name=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("login"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::h4[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::h4[1]"))->click();
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | name=username |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->click();
        // type | name=username | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->sendKeys("puitm3@gmail.com");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // sendKeys | name=password | ${KEY_ENTER}
        $this->keys("${KEY_ENTER}");
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Dashboard'])[1]/following::h5[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Dashboard'])[1]/following::h5[1]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/dashboard.php', $url);
    }

    /** Test Case 15
     * Method testNonMatchingRestPasswords
     *
     */
    public function testNonMatchingRestPasswords()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password");
        // click | name=password2 |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password2"))->click();
        // type | name=password2 | password1
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password2"))->sendKeys("password1");
        // click | name=reset-password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("reset-password"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Passwords do not match.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Passwords do not match.'])[1]/following::div[1]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/complete_password_reset.php?passwords_do_not_match', $url);

    }

    /** Test Case 16
     * Method testDashboardPageAfterLogin
     * Test for the player to land on the dashboard after logging in
     */
    public function testDashboardPageAfterLogin()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | name=username |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->click();
        // type | name=username | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("username"))->sendKeys("puitm3@gmail.com");
        // click | name=password |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->click();
        // type | name=password | password1
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("password"))->sendKeys("password1");
        // click | name=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("login"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Dashboard'])[1]/following::div[2] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Dashboard'])[1]/following::div[2]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/dashboard.php', $url);
    }

    /** Test Case 17
     * Method testPasswordResetLinkWithIncorrectEmailVerificationHash
     * Test when the user clicks on an password reset email with different email verification hash than what is associated to that account
     */
    public function testPasswordResetLinkWithIncorrectEmailVerificationHash()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='An error occurred while resetting your password. Please try again.'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='An error occurred while resetting your password. Please try again.'])[1]/following::div[1]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/password_reset.php?non_matching_hashes', $url);
    }

    /** Test Case 18
     * Method testPasswordResetLinkWithCorrectEmailVerificationHash
     * @test
     */
    public function testPasswordResetLinkWithCorrectEmailVerificationHash()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='Reset Password'])[1]/following::div[1] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='Reset Password'])[1]/following::div[1]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/complete_password_reset.php', $url);
    }

    /** Test Case 19
     * Method testResetPasswordEmailSentSuccessfully
     * Test to see if the reset password email has successfully sent
     */
    public function testResetPasswordEmailSentSuccessfully()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | puitm3@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("puitm3@gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::div[4] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::div[4]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/password_reset.php?sent_reset_email&email=puitm3@gmail.com', $url);
    }

    /** Test Case 20
     * Method testInvalidFormatInResetPasswordField
     * Test for invalid format in the reset password field, such as bob.gmail.com
     */
    public function testInvalidFormatInResetPasswordField()
    {
        // open | http://localhost/mat-php/index.php |
        $this->webDriver->get("http://localhost/mat-php/index.php");
        // click | link=login |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("login"))->click();
        // click | link=exact:Forgot password? |
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Forgot password?"))->click();
        // click | name=email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->click();
        // type | name=email | bob.gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("email"))->sendKeys("bob.gmail.com");
        // click | name=send-password-reset-email |
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("send-password-reset-email"))->click();
        // click | xpath=(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::div[4] |
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(.//*[normalize-space(text()) and normalize-space(.)='register'])[1]/following::div[4]"))->click();
        $url = $this->location();
        $this->assertEquals('http://localhost/mat-php/password_reset.php?invalid_email', $url);
    }
    /**
     * Close the current window.
     */
    public function tearDown()
    {
        $this->webDriver->close();
    }

    /**
     * @param WebDriver\Remote\RemoteWebElement $element
     *
     * @return WebDriver\WebDriverSelect
     * @throws WebDriver\Exception\UnexpectedTagNameException
     */
    private function getSelect(WebDriver\Remote\RemoteWebElement $element): WebDriver\WebDriverSelect
    {
        return new WebDriver\WebDriverSelect($element);
    }
}
