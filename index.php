<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <header id="header">
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h3>Let's <span>create</span> <br> a <span>cleaner</span> future <span>together</span></h3>
            <br>
            <div class="description">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quasi voluptatem cumque voluptatum! Labore, consequuntur dicta, odit sed et velit, culpa a assumenda at aperiam sunt voluptates veniam quibusdam hic?</p>
            </div>
            <div class="cta">
                <a href=""><button class="primary-btn">Get to Know</button></a>
            </div>
        </div>
    </header>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>
        </div>
        <br>
        <div class="layout">
            <h3 id="explore" class="sub-heading">Project Eco-Clean</h3>
            <br>
            <div class="cta-section">
                <div class="img-cmc">
                    <img src="./assets/roadnetwork.jpg" alt="">
                </div>
                <article>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique reiciendis impedit provident, ullam mollitia perspiciatis officia hic, tempore neque, recusandae consectetur temporibus et odio illo?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati iste soluta ipsa hic autem cupiditate reprehenderit velit dolor incidunt consequatur possimus molestiae fuga, quis tempora. Perspiciatis nulla corrupti explicabo possimus temporibus sapiente eum animi nostrum!
                    </p>
                    <br>
                    <button class="primary-btn">Become a GTF Member</button>
                </article>
            </div>
            <br>
            <h3 class="sub-heading">Garbage collection map</h3>
            <br>
            <div class="gmap">
                <img src="./assets/Google-Maps-Tips.png" alt="">
            </div>
            <br>
            <h3 class="sub-heading">Articles</h3>
            <div class="posts">
                <div class="post">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                    <h4 class="sub-heading">Post Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="post">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                    <h4 class="sub-heading">Post Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="post">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                    <h4 class="sub-heading">Post Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </div>
            <br>
            <h3 id="about" class="sub-heading">About Us</h3>
            <div class="about">
                <div class="about-img">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                </div>
                <div class="about-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab inventore neque molestias iusto suscipit, sed libero esse ullam culpa ipsam tenetur omnis, aut quasi! Eveniet?
                    <br>
                    <h3 class="sub-heading">Vision</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque corporis earum sapiente corrupti at aut, voluptate dignissimos numquam veniam vel. Veniam nisi eius sunt repellat fuga tempora, hic ullam incidunt?
                    <br>
                    <h3 class="sub-heading">Mission</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nostrum aliquam nam quisquam accusantium magni officiis soluta expedita nemo, nobis, libero quibusdam nisi repellat ex dolor perferendis maiores saepe et
                </div>
            </div>
            <br>
            <h3 id="contact" class="sub-heading">Contact Us</h3>
            <div class="contact">
                <div class="about-content">
                    <ul>
                        <li><i class="fas fa-phone-alt"></i><span>011 412 1234, 076 212 1234</span></li>
                        <li><i class="fas fa-envelope"></i><span>ecocleaner@mail.com</span></li>
                        <li><i class="fas fa-map-marker-alt"></i><span>No. 12/3, street Road, City</span></li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                </div>
            </div>
        </div>
        <br>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="./scripts/imgSlider.js"></script>
    <script src="https://kit.fontawesome.com/56016c02ef.js" crossorigin="anonymous"></script>
</body>
</html>