<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instagram</title>
        <link rel="icon" href="../insta-icon.png" type="image/icon type">
        <link rel="stylesheet" href="explore.css">
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
            <a href="explore.php" class="sidebar-item active">
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
            <a href="../profile/profile.php" class="sidebar-item">
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
            <div class="explore">
                <div class="explore-grid">
                    <div class="explore-content odd">
                        <div class="portrait">
                            <div class="image-canva">
                                <img src="post/ervin-old.gif" alt="">
                                    <div class="image-overlay">
                                        <div class="heart">
                                            <i class="fa-solid fa-heart"></i>
                                            30
                                        </div>
                                        <div class="comment">
                                            <i class="fa-solid fa-comment"></i>
                                            0
                                        </div>
                                    </div>
                            </div>      
                        </div>
                        <div class="landscape">  
                            <div class="image-canva">
                                <img src="post/team-yey.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        20
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/team-yey1.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        15
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        2
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/padre-damaso.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        11
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/ervin-school.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        15
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        6
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                              
                    </div>

                    <div class="explore-content even">
                        <div class="portrait">
                            <div class="image-canva">
                                <img src="post/ervin-gym.jpg" alt="">
                                    <div class="image-overlay">
                                        <div class="heart">
                                            <i class="fa-solid fa-heart"></i>
                                            30
                                        </div>
                                        <div class="comment">
                                            <i class="fa-solid fa-comment"></i>
                                            0
                                        </div>
                                    </div>
                            </div>      
                        </div>
                        <div class="landscape">  
                            <div class="image-canva">
                                <img src="post/tulog.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        20
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/ikot.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        15
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        2
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/bata.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        11
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="image-canva">
                                <img src="post/black-white.jpg" alt="">
                                <div class="image-overlay">
                                    <div class="heart">
                                        <i class="fa-solid fa-heart"></i>
                                        15
                                    </div>
                                    <div class="comment">
                                        <i class="fa-solid fa-comment"></i>
                                        6
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                              
                    </div>
                </div>
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