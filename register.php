<?php
include_once './header.php'
?>
<section class="register-section">
    <div class="registeration-form">
        <h1 class="form-title">Registration From</h1>
        <form id="form-registeration" action="./includes/signup-inc.php" method="post">
            <div class="input-text-box">
                <div class="form-group">
                    <label for="username" id="name-label">Username:</label>
                    <input type="text" id="username" name="username" class="input-text" placeholder="Enter your  user name">
                    <small>Error message</small>

                </div>
                <div class="form-group">
                    <label for="password" id="password-label">Password:</label>
                    <input type="password" id="password" name="password" class="input-text" placeholder="Enter your password">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="repeat-password" id="password-label"> Confirm Password:</label>
                    <input type="password" id="repeat-password" name="password" class="input-text" placeholder="Repeat your password">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="title" id="title-label">Title:</label>
                    <input type="text" id="title" name="title" class="input-text" placeholder="Enter your title">
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="firstname" id="firstname-label">First Name:</label>
                    <input type="text" id="firstname" name="firstname" class="input-text" placeholder="First Name" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="lastname" id="lastname-label">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" class="input-text" placeholder="Last Name" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="gender" id="dropdown-label">Gender:</label>
                    <select id="dropdown" name="gender" class="input-text">
                        <option disabled value>
                            chose your gender
                        </option>
                        <option value="other">Other</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address1" id="address1-label">Address 1:</label>
                    <input type="text" id="address1" name="address1" class="input-text" placeholder="Enter your Address 1" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="address2" id="address2-label">Address 2:</label>
                    <input type="text" id="address2" name="address2" class="input-text" placeholder="Enter your Address 2">
                </div>
                <div class="form-group">
                    <label for="post-code" id="post-code-label">Post Code:</label>
                    <input type="text" id="post-code" name="postcode" class="input-text" placeholder="Enter your post-code" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="description" id="description-label">Description:</label>
                    <textarea style="height:50px;resize:vertical;" id="description" name="description" rows="2" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="email" id="email-label">Email:</label>
                    <input type="email" id="email" class="input-text" name="email" placeholder="Enter your email" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="phone" id="phone-label">Enter a phone number:</label>
                    <input type="tel" id="phone" class="input-text" name="telephone" placeholder="+123-456-789-789" required>
                    <small>Error message</small>
                </div>
                <div class="form-group">
                    <label for="profile" id="profile-label">Profile Url:</label>
                    <input type="text" id="profile_url" class="input-text" name="profile_url" placeholder="Enter your profile Url" required>
                    <small>Error message</small>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" name="submit" id="submit" value="Register">
            </div>
        </form>
    </div>
</section>
<?php
include_once './footer.php'
?>