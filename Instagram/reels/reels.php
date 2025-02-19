<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instagram</title>
        <link rel="icon" href="../insta-icon.png" type="image/icon type">
        <link rel="stylesheet" href="reel.css">
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
            <a href="reels.php" class="sidebar-item active">
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
            <div class="reels">
                <div class="reels-content">
                    <div class="reels-canva">
                        <video controls>
                            <source src="videos/lapulapu.mp4" type="video/mp4">
                        </video>
                        <div class="video-info">
                            <div class="video-username">
                                Kls.veven
                            </div>
                            <div class="video-caption"> 
                                Lapu Lapu Highlight
                            </div>
                        </div>
                    </div>
                    <div class="reels-reaction">
                        <div class="reaction-text">
                            <i class="fa-regular fa-heart"></i>
                            <div class="text">
                                likes
                            </div>
                        </div>
                        <div class="reaction-text">
                            <i class="fa-regular fa-comment"></i>
                            <div class="text">
                                200
                            </div>
                        </div>
                        <div>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <div>
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="reels">
                <div class="reels-content">
                    <div class="reels-canva">
                        <video controls>
                        <source src="videos/Chaewon Gusto ko sakin kalang(1).mp4" type="video/mp4">
                        </video>
                        <div class="video-info">
                            <div class="video-username">
                                Kls.veven
                            </div>
                            <div class="video-caption"> 
                                chaewon
                            </div>
                        </div>
                    </div>
                    <div class="reels-reaction">
                        <div class="reaction-text">
                            <i class="fa-regular fa-heart"></i>
                            <div class="text">
                                likes
                            </div>
                        </div>
                        <div class="reaction-text">
                            <i class="fa-regular fa-comment"></i>
                            <div class="text">
                                200
                            </div>
                        </div>
                        <div>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <div>
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="reels">
                <div class="reels-content">
                    <div class="reels-canva">
                        <video controls>
                        <source src="videos/chaewon cause im falling in love with you-Final).mp4" type="video/mp4">
                        </video>
                        <div class="video-info">
                            <div class="video-username">
                                Kls.veven
                            </div>
                            <div class="video-caption"> 
                                chaewon
                            </div>
                        </div>
                    </div>
                    <div class="reels-reaction">
                        <div class="reaction-text">
                            <i class="fa-regular fa-heart"></i>
                            <div class="text">
                                likes
                            </div>
                        </div>
                        <div class="reaction-text">
                            <i class="fa-regular fa-comment"></i>
                            <div class="text">
                                200
                            </div>
                        </div>
                        <div>
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <div>
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-ellipsis"></i>
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


        document.addEventListener("DOMContentLoaded", function () {
            const videos = document.querySelectorAll(".reels-canva video");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        const video = entry.target;

                        if (entry.isIntersecting) {
                            video.play(); // Play when in view
                        } else {
                            video.pause(); // Pause when out of view
                        }
                    });
                },
                {
                    root: null, // Use the viewport as the root
                    threshold: 0.5, // Trigger when at least 50% of the video is in view
                }
            );

            videos.forEach((video) => {
                observer.observe(video);
            });
        });

    </script>
    </body>

</html>