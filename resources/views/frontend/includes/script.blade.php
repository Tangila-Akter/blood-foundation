 <!-- ---------- JS ---------- -->
 <script>
    // header menu
    const navToggol = document.querySelector('.nav_toggol');
    const closeToggol = document.querySelector('.close_toggol');
    navToggol.addEventListener('click',function () {
        document.querySelector('.nav_list').classList.add('show_list');
        closeToggol.style.display = "block";
        navToggol.style.display = "none";
    })

    closeToggol.addEventListener('click', function () {
        document.querySelector('.nav_list').classList.remove('show_list');
        closeToggol.style.display = "none";
        navToggol.style.display = "block";

    })
    // hero_img1
    const itIogo = document.querySelectorAll('.it_logo');
    const ItUser = document.querySelectorAll('.hero_user');
    setTimeout(() => {
        itIogo.forEach((img) => {
            img.style.display = "none";
        });
        ItUser.forEach((user) => {
            user.style.display = "block";
        });
    },5000);

    // Slider
    const addSlider = document.querySelector('.add_slider');
    const addItem = document.querySelectorAll('.add_item');
    for (let i = 0; i < addItem.length; i++) {
        const items = addItem[i];
        console.log(items);
    }

    // ---------- Footer ----------
    const hero = document.querySelector('.hero');
    const privacyText = document.querySelector('.privacy_text');
    const aboutText = document.querySelector('.about_text');
    const transCondi = document.querySelector('.trans_condition');

    function footerAll(){
        hero.style.display = 'none';
        privacyText.style.display = 'none';
        aboutText.style.display = 'none';
        transCondi.style.display = 'none';
    }
    function Privacy() {
        footerAll();
        privacyText.style.display = 'block';
    }
    function About() {
        footerAll();
        aboutText.style.display = 'block';
    }
    function TransCondition() {
        footerAll();
        transCondi.style.display = 'block';
    }
</script>
<!-- ---------- JS end ---------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
