<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="insta-icon.png" type="image/icon type">
        <title>Instagram</title>
        <link rel="stylesheet" href="styles.css">
        <!-- Add Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    </head>
    <body>
    <div class="main">
        <div class="sidebar">
            <h1 style="padding-left:10px">Instagram</h1>

            <a href="home.php" class="sidebar-item active">
                <i class="fa-solid fa-house"></i> <span class="sidebar-text active">Home</span>
            </a>
            <a href="#" class="sidebar-item">
                <i class="fa-solid fa-magnifying-glass"></i> <span class="sidebar-text">Search</span>
            </a>
            <a href="explore/explore.php" class="sidebar-item">
                <i class="fa-regular fa-compass"></i> <span class="sidebar-text">Explore</span>
            </a>
            <a href="reels/reels.php" class="sidebar-item">
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
            <a href="profile/profile.php" class="sidebar-item">
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
            <div class="story">
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">bini_gwen <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">NBA <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">MLBB <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Riot <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Genshin_eng <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Genshin_cn <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Genshin_jp <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Genshin_kr <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                <div class="story-username"><i class="fa-solid fa-circle-user"></i><div class="story-name">Genshin_ph <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div></div>
                
            </div>
            <div class="user-post">
                <div class="profile">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="profile-name">Veven.kls</div>
                </div>
                <div class="post">
                    
                    <img src="instagram.jpg" class="post-image">
                    
                    <div class="post-buttons">
                         <div class="left-buttons">
                            <a href="#" class="post-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="post-btn"><i class="fa-regular fa-comment"></i></a>
                            <a href="#" class="post-btn"><i class="fa-regular fa-paper-plane"></i></a>
                        </div>
                        <div class="right-buttons">
                            <a href="#" class="post-btn"><i class="fa-regular fa-bookmark"></i></a>
                        </div>
                    </div>
                    <div class="post-caption">
                        <div class="post-name">Veven.kls</div>
                        <p>Post 1</p>
                    </div>
                    <div class="post-comment">
                        <div class="view-comments">
                            View all comments
                        </div>
                        
                        <div class="add-comments">
                            <input type="text" class="comment-box" placeholder="Add comment.....">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-post">
                <div class="profile">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="profile-name">Veven.kls</div>
                </div>
                <div class="post">
                    
                    <img src="ervin.jpg" class="post-image">
                    
                    <div class="post-buttons">
                        <div class="left-buttons">
                            <a href="#" class="post-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="post-btn"><i class="fa-regular fa-comment"></i></a>
                            <a href="#" class="post-btn"><i class="fa-regular fa-paper-plane"></i></a>
                        </div>
                        <div class="right-buttons">
                        <a href="#" class="post-btn"><i class="fa-regular fa-bookmark"></i></a>
                        </div>
                    </div>
                    <div class="post-caption">
                        <div class="post-name">Veven.kls</div>
                        <p>LSPU is Life</p>
                    </div>
                    <div class="post-comment">
                        <div class="view-comments">
                            View all comments
                        </div>
                        
                        <div class="add-comments">
                            <input type="text" class="comment-box" placeholder="Add comment.....">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                    </div>
                </div>
            </div>
            <footer style="font-size:10px">Ervin &copy; 2025</footer>
        </div>

        <div class="addition">
            <div class="switch">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-name">
                        <div class="additional-profile-username">Veven.kls</div>
                        <div class="additional-profile-name">Ervin Regaspi</div>
                    </div>
                </div>
                <div class="switch-account"><a href="#" class="switch-btn">Switch</a></div>
            </div>
            
            <div class="suggested">
                <div class="additional-suggest">Suggested for you</div>
                <div class="additional-see-all"><a href="#" class="see-all-btn">See All</a></div>
            </div>
            
            <div class="follow">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-follow">
                        <div class="additional-follow-username">bini_aiah <div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div>
                        <div class="additional-followed-by">followed by bini_gwen</div>
                    </div>
                </div>
                <div class="follow-account"><a href="#" class="follow-btn">Follow</a></div>
            </div>
            <div class="follow">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-follow">
                        <div class="additional-follow-username">bini_sheena<div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div>
                        <div class="additional-followed-by">followed by bini_gwen</div>
                    </div>
                </div>
                <div class="follow-account"><a href="#" class="follow-btn">Follow</a></div>
            </div>
            <div class="follow">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-follow">
                        <div class="additional-follow-username">bini_mikha<div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div>
                        <div class="additional-followed-by">followed by bini_gwen</div>
                    </div>
                </div>
                <div class="follow-account"><a href="#" class="follow-btn">Follow</a></div>
            </div>
            <div class="follow">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-follow">
                        <div class="additional-follow-username">bini_colet<div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div>
                        <div class="additional-followed-by">followed by bini_gwen</div>
                    </div>
                </div>
                <div class="follow-account"><a href="#" class="follow-btn">Follow</a></div>
            </div>
            <div class="follow">
                <div class="profile-account">
                    <div class="profile-image"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="additional-follow">
                        <div class="additional-follow-username">bini_maloi<div class="follow-check"><i class="fa-solid fa-circle-check"></i></div></div>
                        <div class="additional-followed-by">followed by bini_gwen</div>
                    </div>
                </div>
                <div class="follow-account"><a href="#" class="follow-btn">Follow</a></div>
            </div>
        </div>
    </div>
    <script src="darkmode.js"></script>
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