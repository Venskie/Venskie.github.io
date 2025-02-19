<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instagram</title>
        <link rel="icon" href="../insta-icon.png" type="image/icon type">
        <link rel="stylesheet" href="tagged.css">
        <!-- Add Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    </head>
    <body>
    <div class="main">
        <div class="sidebar">
            <h1 style="padding-left:10px">Instagram</h1>

            <a href="../home.php" class="sidebar-item">
                <i class="fa-solid fa-house"></i> <span class="sidebar-text">Home</span>
            </a>
            <a href="#" class="sidebar-item">
                <i class="fa-solid fa-magnifying-glass"></i> <span class="sidebar-text">Search</span>
            </a>
            <a href="../explore/explore.php" class="sidebar-item">
                <i class="fa-regular fa-compass"></i> <span class="sidebar-text">Explore</span>
            </a>
            <a href="../reels/reels.php" class="sidebar-item">
                <i class="fa-regular fa-circle-play"></i> <span class="sidebar-text">Reels</span>
            </a>
            <a href="#" class="sidebar-item">
                <i class="fa-regular fa-paper-plane"></i> <span class="sidebar-text">Messages</span>
            </a>
            <a href="#" class="sidebar-item">
                <i class="fa-regular fa-heart"></i> <span class="sidebar-text">Notification</span>
            </a>
            <a href="#" class="sidebar-item">
                <i class="fa-solid fa-plus"></i> <span class="sidebar-text">Create</span>
            </a>
            <a href="profile.php" class="sidebar-item active">
                <i class="fa-solid fa-user"></i> <span class="sidebar-text">Profile</span>
            </a>
            <div class="bottom">
                <a href="#" class="sidebar-item">
                    <i class="fa-brands fa-threads"></i> <span class="sidebar-text">Thread</span>
                </a>
                <a href="#" class="sidebar-item" id="moreButton">
                    <i class="fa-solid fa-bars"></i> <span class="sidebar-text">More</span>
                </a>
            </div>
           

            <!-- Popup Dropdown -->
            <!-- <div class="popup-menu" id="morePopup">
                <button class="toggle-button" id="toggleDarkMode">Toggle Dark Mode</button>
            </div> -->
        </div>
        
        <div class="content">
            <!-- header -->
            <div class="profile-header">
                <div class="profile-image">
                    
                    <i class="fa-solid fa-circle-user"></i>
                    <div class="note">
                        <input type="text" placeholder="Note...">
                    </div>
                </div>
                <div class="profile-info">
                    <!-- username, edit profile view archive, setting -->
                    <div class="profile-edit-name">
                        <div class="username">
                            Veven.kls
                        </div>
                        <div class="edit-profile">
                           <a href="#">Edit profile</a>
                        </div>
                        <div class="view-archive">
                            <a href="#">View Archive</a>
                        </div>
                        <div class="settings">
                            <a href="#"><i class="fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                    <!-- account post followers folloiwng -->
                    <div class="profile-stats">
                        <div class="post">
                            4 posts
                        </div>
                        <div class="followers">
                           <a href="#">90 followers</a>
                        </div>
                        <div class="following">
                            <a href="#">306 following</a>
                        </div>
                    </div>
                    <!-- bio -->
                    <div class="profile-bio">
                        <div class="bio-username">
                            Ervin Regaspi
                        </div>
                        <div class="bio">
                           <p>......</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- New Highlights-->
            <div class="highlights">
                <div class="highlight-new">
                    <div class="circle"><i class="fa-solid fa-plus"></i></div>
                    <div class="new-tag">
                        New
                    </div> 
                </div>
            </div>
            <!-- post saved tagged -->
            
            <div class="posts">
                 <div class="post-header">
                    <div class="post-grid">
                        <a href="profile.php" >
                        <i class="fa-solid fa-table-cells"></i>
                        POSTS
                        </a>
                    </div>
                    <div class="saved ">
                        <a href="saved.php">
                        <i class="fa-regular fa-bookmark"></i>
                        SAVED
                        </a>
                    </div>
                    <div class="tagged active-post-header">
                        <a href="tagged.php">
                        <i class="fa-solid fa-user-tag"></i>
                        TAGGED
                        </a>
                    </div>
                 </div>

                 <div class="tagged-part">
                    <div class="circle-tagged"><i class="fa-solid fa-user"></i></div>
                    <div class="tagged-name">Photos of you</div>
                    <div class="tagged-description"><p>When people tag you in photos, they'll appear here.</p></div>
                 </div>
                 
            </div>
        </div>

        
    </div>
    <script src="../darkmode.js"></script>
    <script>
        // Get elements
        const moreButton = document.getElementById('moreButton');
        const morePopup = document.getElementById('morePopup');

        // Toggle popup visibility on click
        moreButton.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default anchor behavior
            const isVisible = morePopup.style.display === 'block';
            morePopup.style.display = isVisible ? 'none' : 'block';
        });

        // Close popup when clicking outside
        document.addEventListener('click', (e) => {
            if (!morePopup.contains(e.target) && e.target !== moreButton) {
                morePopup.style.display = 'none';
            }
        });

    </script>
    </body>

</html>