<?php
include 'head1.php';
?>
<div class="wrapper">
    <!-- sidebar navigation component -->
    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="dashboard.html"><i class="fas fa-home"></i>Dashboard</a>
            </li>
            <li>
                <a href="forms.html"><i class="fas fa-file-alt"></i>Forms</a>
            </li>
            <li>
                <a href="tables.html"><i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
                <a href="charts.html"><i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
                <a href="icons.html"><i class="fas fa-icons"></i>Icons</a>
            </li>
            <li>
                <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i>UI Elements</a>
                <ul class="collapse list-unstyled" id="uielementsmenu">
                    <li>
                        <a href="ui-buttons.html"><i class="fas fa-angle-right"></i>Buttons</a>
                    </li>
                    <li>
                        <a href="ui-badges.html"><i class="fas fa-angle-right"></i>Badges</a>
                    </li>
                    <li>
                        <a href="ui-cards.html"><i class="fas fa-angle-right"></i>Cards</a>
                    </li>
                    <li>
                        <a href="ui-alerts.html"><i class="fas fa-angle-right"></i>Alerts</a>
                    </li>
                    <li>
                        <a href="ui-tabs.html"><i class="fas fa-angle-right"></i>Tabs</a>
                    </li>
                    <li>
                        <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i>Date & Time Picker</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i>Authentication</a>
                <ul class="collapse list-unstyled" id="authmenu">
                    <li>
                        <a href="login.html"><i class="fas fa-lock"></i>Login</a>
                    </li>
                    <li>
                        <a href="signup.html"><i class="fas fa-user-plus"></i>Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html"><i class="fas fa-user-lock"></i>Forgot password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Pages</a>
                <ul class="collapse list-unstyled" id="pagesmenu">
                    <li>
                        <a href="blank.html"><i class="fas fa-file"></i>Blank page</a>
                    </li>
                    <li>
                        <a href="404.html"><i class="fas fa-info-circle"></i>404 Error page</a>
                    </li>
                    <li>
                        <a href="500.html"><i class="fas fa-info-circle"></i>500 Error page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
            </li>
            <li>
                <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
            </li>
        </ul>
    </nav>
    <!-- end of sidebar component -->
    <div id="body" class="active">
        <!-- navbar navigation component -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <button type="button" id="sidebarCollapse" class="btn btn-light">
                <i class="fas fa-bars"></i><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of navbar navigation -->
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>Casier Form</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Offline Payment Form</div>
                            <div class="card-body">
                                <form accept-charset="utf-8" action="reciept.php" method="post">
                                    <div class="row g-2">
                                        <div class="col">
                                            <label for="Adv info" class="form-label sr-only">Adv info</label>
                                            <input name="advocate" type="text" placeholder="Enter ADV Detail" class="form-control" id="data" required>
                                        </div>
                                        <div class="col">
                                            <label for="options" class="form-label sr-only">Select an Document</label>
                                            <select id="options" class="form-control" name="doc">
                                                <option value="">Select Document Type</option>
                                                <option value="aadhaar">Aadhaar</option>
                                                <option value="driving license">Driving license</option>
                                                <option value="pan">Pan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-3" id="showData"></div>
                                    <div class="row g-2 mt-3">
                                        <div class="col">
                                            <label for="Docnumber" class="form-label sr-only">Doc Number</label>
                                            <input type="text" name="docment" placeholder="Document Number" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label for="vname" class="form-label sr-only">Vaddi Name Per Document</label>
                                            <input type="text" name="Vadi" placeholder="Vaddi Name Per Document" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label for="PAC" class="form-label sr-only">Number of PAC</label>
                                            <input type="number" name="npac" id="Pac" placeholder="Enter No. Of PAC" class="form-control" min='0' max="11" resuired>
                                        </div>
                                        <div class="row g-2 mt-3">
                                            <div class="col" id="amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mt-2">
                                        <button type="submit" class="btn btn-primary" name="submit"  id="saveButton">Save</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            $("#data").keyup(function() {
                var data = $(this).val();

                if (data != "") {
                    $.ajax({
                        url: "advocateinform.php",
                        method: "POST",
                        data: {
                            data: data
                        },
                        success: function(response) {
                            $("#showData").css('display', 'flex'); // Ensure the element is visible
                            $("#showData").html(response);
                        }
                    });
                } else {
                    $("#showData").css('display', 'none'); // Hide the element when input is empty
                }
            });
        });
    </script>

    <script>//this script tag is use for dynamic input data with for pac amount calculation
        // Select the input field by its ID
        let pacInput = document.getElementById("Pac");
        // Select the div where the new input will be added
        let amountDiv = document.getElementById("amount");

        // Add an event listener for the keyup event
        pacInput.addEventListener("keyup", function() {
            // Get the current value of the input field
            let inputValue = pacInput.value;

            // Calculate the amount
            const amount = (inputValue * 500) + 10;

            // Clear the amountDiv before creating new input
            amountDiv.innerHTML = "";

            if (inputValue > 0) {
                // Create a new input element
                let newInput = document.createElement("input");
                newInput.type = "number";
                newInput.placeholder = "Enter amount";
                newInput.value = amount;
                newInput.name = "value";
                newInput.className = "form-control col";
                newInput.style.float = "end";

                // Append the new input to the amount div
                amountDiv.appendChild(newInput);

                // Show the amount div
                amountDiv.style.display = "block";
            } else {
                // Hide the amount div
                amountDiv.style.display = "none";
            }
        });
    </script>
    <script>
    $(document).ready(function() {
        // Handle form submission
        $("form").on("submit", function(event) {
            // Disable the button after click
            $("#saveButton").prop("disabled", true);
            // Optionally, change the button text
            $("#saveButton").text("Processing...");
        });
    });
</script>

    </body>

    </html>