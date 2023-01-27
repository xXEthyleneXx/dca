<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navigation" id="naviagation_home">
            <div class="logo" id="logo_home">
                <span>Logo Here</span>
            </div>
            <div class="links" id="links_home">
                <div class="button" id="logout_button_home">
                    <div class="image" id="logout_button_home_image"></div>
                    <div class="imgtxt" id="logout_button_home_image_text">
                        <span>Logout</span>
                    </div>
                </div>
                <div class="button" id="edit_inventory_button_home">
					<div class="image" id="edit_inventory_button_home_image"></div>
					<div class="imgtxt" id="edit_inventory_button_home_image_text">
						<span>Edit Inventory</span>
					</div>
				</div>
                <div class="button" id="contacts_button_home">
					<div class="image" id="contacts_button_home_image"></div>
					<div class="imgtxt" id="contacts_button_home_image_text">
						<span>Contacts</span>
					</div>
                </div>
				<div class="button" id="history_button">
					<div class="image" id="history_button_home_image"></div>
					<div class="imgtxt" id="history_button_home_image_text">
						<span>History</span>
					</div>
                </div>
            </div>
        </div>
        <div class="fill" class="fill_home">
            <div class="admin_user" id="admin_user_home">
                <div class="userimg" id="admin_user_image">
                    <span>Profile Image Here</span>
                </div>
                <span id="admin_user_last_name">Last,</span>
                <span id="admin_user_first_name">First</span>
                <span id="admin_user_middle_init">M</span>
                <br>
                <span id="admin_user_roll">Account Manager</span>
            </div>
            <div class="divdiv" id="divdivdiv_home">__</div>
            <div class="admin_hud" id="admin_hud_home">
                <div class="recent_pur">
                    <!-- Read DB for most recent purchase date / display car stats -->
                    <span>RecPur</span>
                </div>
                <div class="recent_sell">
                    <!-- Read DB for most recent sell date / display car stats -->
                    <span>RecSel</span>
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </body>
    <script src="script.js"></script>
    <script>
        var user = request_user();
        setuser(user);
    </script>
</html>