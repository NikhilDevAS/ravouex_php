<header>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="/">
            <img style="width: 7rem;" src="/public/user/images/logo.png" alt="Ravouex Group" />
            </a>
        </div>
        <ul>
            <li class="navbar-dropdown">
                <a href="/">Home</a>
            </li>
            <li class="navbar-dropdown">
                <a href="/about">About Us</a>
            </li>
            <li class="navbar-dropdown">
                <a href="/">Ventures</a>
                <div class="dropdown">
                    <a target="_blank" href="https://raphaaromahospital.com/">Rapha Aroma Hospital</a>
                    <a target="_blank" href="https://raphahealth.co.in">Rapha Health</a>
                    <a target="_blank" href="https://rxhomedoc.com">Home Doc</a>
                </div>
            </li>
            <li class="navbar-dropdown">
                <a href="/gallery">Gallery</a>
            </li>
            <li class="navbar-dropdown">
                <a href="/">Make An Appointment</a>
                <div class="dropdown">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=919061035150">Rapha Aroma
                        Hospital</a>
                    <a target="_blank" href="https://raphahealth.co.in/contactus">Rapha Health</a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+918590741001&text=Hi">Home Doc</a>
                </div>
            </li>
            <li class="navbar-dropdown">
                <a href="job-portal">Job Protal</a>
            </li>
        </ul>
    </nav>
    <!-- <div class="fixed z-[110] top-0 right-0 left-0 bottom-0 bg-[#0b3442] lg:hidden p-10">
            <div class="w-full flex justify-end items-center">
                <IoClose size={30} class="text-white" />
            </div>
            <div class="min-h-screen flex items-center justify-center text-sm">
                <ul class="flex flex-col text-gray-500">
                    <li class="mobList">
                        <a href="/">Home</a>
                    </li>
                    <li class="mobList">
                        <a href="/aboutus">About Us</a>
                    </li>
                    <li>
                        <div class="mobList flex items-center justify-between">Ventures <i
                                class="fa-solid fa-caret-down"></i></div>
                        <div class="ml-2 flex flex-col">
                            <a target="_blank" href="https://raphaaromahospital.com/" class="dropdown_mob_opt">Rapha
                                Aroma Hospital</a>
                            <a target="_blank" href="https://raphahealth.co.in" class="dropdown_mob_opt">Rapha
                                Health</a>
                            <a target="_blank" href="https://rxhomedoc.com" class="dropdown_mob_opt">Home Doc</a>
                        </div>
                    </li>
                    <li class="mobList">
                        <a href="/gallery">Gallery</a>
                    </li>
                    <li>
                        <div class="mobList flex items-center justify-between">Make An Appointment &nbsp; <i
                                class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="ml-2 flex flex-col">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=919061035150"
                                class="dropdown_mob_opt">Rapha Aroma Hospital</a>
                            <a target="_blank" href="https://raphahealth.co.in/contactus" class="dropdown_mob_opt">Rapha
                                Health</a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=+918590741001&text=Hi"
                                class="dropdown_mob_opt">Home Doc</a>
                        </div>
                    </li>
                    <li class="mobList">
                        <a href="/job-portal">Job Protal</a>
                    </li>
                </ul>
            </div>
        </div> -->
</header>

<script>
    window.addEventListener('scroll', function () {
 
 // var position = this.window.scrollY

 // Get the current scroll position
 var position = window.scrollY || window.pageYOffset;

 // Select the element with the class 'nav-menu'
 var navMenu = document.querySelector('.navbar');

 // Check if the scroll position is at least 100 pixels
 if (position >= 100) {
   // Add the 'costum-navbar' class to the selected element
   navMenu.classList.add('custom-navbar');
 } else {
   // Remove the 'costum-navbar' class from the selected element
   navMenu.classList.remove('custom-navbar');
 }
});
</script>