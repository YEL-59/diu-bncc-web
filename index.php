<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body class="bg-gray-100">
    <div class="container mx-auto">
      <header class="py-5">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
          <div class="flex items-center">
            <img
              class="h-20 w-20 rounded-lg object-cover"
              alt="logo"
              src="./assets/Bncc_logo.png"
            />
            <div class="ml-5 border-l-4 border-gray-400 pl-3">
              <h2 class="text-gray-800 font-bold text-lg">
                Bangladesh National Cadet Corps
              </h2>
              <h3 class="text-gray-800 text-sm">
                Daffodil International University
              </h3>
            </div>
          </div>
        </div>
      </header>
     <?php 
       echo "hello world"
     ?>
      <nav class="bg-green-100 border-t-2 border-gray-300 py-4">
        <div class="container mx-auto flex justify-center items-center px-4">
          <!-- Mobile Menu Button (Positioned at the end) -->
          <button
            id="menu-toggle"
            class="md:hidden text-gray-800 focus:outline-none ml-auto"
            onclick="toggleMenu()"
          >
            <!-- Hamburger Icon -->
            <svg
              id="menu-icon"
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
            <!-- Close Icon (Initially hidden) -->
            <svg
              id="close-icon"
              class="hidden h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </button>

          <!-- Navbar Links -->
          <div id="nav-links" class="hidden md:flex space-x-6 text-gray-800">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Notice Board</a>
            <a href="./honourBoard.html" class="hover:underline">Honour Board</a>
            <a href="#" class="hover:underline">Cadet Corner</a>
            <a href="#" class="hover:underline">Gallery</a>
          </div>
        </div>

        <!-- Mobile Menu Links -->
        <div
          id="mobile-menu"
          class="md:hidden hidden flex-col items-center space-y-2 mt-4 text-gray-800"
        >
          <a href="#" class="block hover:underline">Home</a>
          <a href="#" class="block hover:underline">About</a>
          <a href="#" class="block hover:underline">Notice Board</a>
          <a href="#" class="block hover:underline">Honour Board</a>
          <a href="#" class="block hover:underline">Cadet Corner</a>
          <a href="#" class="block hover:underline">Gallery</a>
        </div>
      </nav>

      <main class=" ">
        <div class="container relative mx-auto overflow-hidden">
          <div class="flex transition-transform" id="slides">
            <div
              class="min-w-full bg-center bg-cover bg-no-repeat text-white text-3xl"
              style="
                height: 70vh;
                background-image: url('https://bncc.info/web/image/370424-dd301a24/WhatsA%E2%80%A620Image%202024-02-07%20at%2012.45.58_94ed2ada.jpg');
              "
            ></div>
            <div
              class="min-w-full bg-center bg-cover bg-no-repeat bg-blue-500 text-white text-3xl"
              style="
                background-image: url('https://bncc.info/web/image/393179-1da82e95/WhatsApp%20Image%202024-10-15%20at%202.58.16%20PM.jpeg');
              "
            ></div>
            <div
              class="min-w-full bg-center bg-cover bg-no-repeat bg-blue-500 text-white text-3xl"
              style="
                background-image: url('https://bncc.info/web/image/360396-315a8773/DSC_0185.JPG');
              "
            ></div>
            <div
              class="min-w-full bg-center bg-cover bg-no-repeat bg-blue-500 text-white text-3xl"
              style="
                background-image: url('https://bncc.info/web/image/345545-311a5bdd/%E0%A6%AC%E0%A6%BF%E0%A6%8F%E0%A6%A8%E0%A6%B8%E0%A6%BF%E0%A6%B8%E0%A6%BF%E0%A6%B0%20%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A1%E0%A7%87%E0%A6%9F%E0%A6%97%E0%A6%A3%20%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%20%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A3%E0%A7%87%20%E0%A6%85%E0%A6%82%E0%A6%B6%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%B9%E0%A6%A3.jpg');
              "
            ></div>
          </div>
          <button
            class="absolute top-1/2 left-5 text-white px-4 py-2"
            onclick="showSlide(-1)"
          >
            ❮
          </button>
          <button
            class="absolute top-1/2 right-5 text-white px-4 py-2"
            onclick="showSlide(1)"
          >
            ❯
          </button>
        </div>
      </main>

      <section
        class="max-w-6xl mx-auto my-10 grid grid-cols-1 md:grid-cols-2 gap-8 p-2">
        <div class="bg-green-200 p-6 rounded-lg">
          <h2 class="text-lg font-semibold">Our Pride</h2>
          <p class="mt-4 text-gray-600">
            Meet these inspiring men and women who achieved the uncommon.
          </p>
          <button
            class="mt-4 bg-black text-white py-2 px-4 rounded hover:bg-gray-700"
          >
            Read More
          </button>
        </div>
        <div class="bg-green-200 p-6 rounded-lg">
          <h2 class="text-lg font-semibold">The Architect</h2>
          <p class="mt-4 text-gray-600">
            Meet these inspiring men and women who achieved the uncommon.
          </p>
          <button
            class="mt-4 bg-black text-white py-2 px-4 rounded hover:bg-gray-700"
          >
            Read More
          </button>
        </div>
      </section>

      <footer
        class="max-w-6xl mx-auto border-t-2 border-gray-300 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-center"
      >
        <div>
          <h3 class="font-semibold">About Us</h3>
          <p>Daffodil University, Bangladesh</p>
          <p>bncc.diu.edu.bd</p>
          <p>01*********</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
       
      </footer>
    </div>

    <script>
      function toggleMenu() {
        const mobileMenu = document.getElementById("mobile-menu");
        const menuIcon = document.getElementById("menu-icon");
        const closeIcon = document.getElementById("close-icon");

        mobileMenu.classList.toggle("hidden");
        menuIcon.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
      }

      let currentIndex = 0;
      const slides = document.getElementById("slides");
      const slideCount = slides.childElementCount;

      function showSlide(direction) {
        currentIndex = (currentIndex + direction + slideCount) % slideCount;
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
      }

      setInterval(() => showSlide(1), 3000);
    </script>
  </body>
</html>