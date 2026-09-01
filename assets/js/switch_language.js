document.addEventListener('DOMContentLoaded', () => {
    const translations = {
        en: {
            page_title: 'Portfolio - Shota Kurdgelashvili',
            title: 'Portfolio',

            main_page: 'Main Page',
            about_me: 'About Me',
            services: 'Services',
            portfolio: 'Portfolio',
            contact: 'Contact',

            lang_btn_title: 'Press this button to change the layout language / დააჭირეთ მოცემულ ღილაკს ენის შესაცვლელად',

            introduction_banner_title: 'I am a Web Developer',
            introduction_banner_subtitle: 'Welcome to my Portfolio Page!',

            about_me_text: 'I am a Web Developer with 2-3 years of hands-on experience in Web Development. During my works, I have made One-page Landing Pages and also more complex website - Online Shop. You can take a look at my portfolio in the <a class="portfolio-text" href="#portfolio">Portfolio</a> section!',

            services_title: 'I can make any type of website',
            landing: 'Landing Pages',
            landing_description: 'Landing pages of products at sale for advertisement',
            corporate: 'Company\'s corporate website',
            corporate_description: 'Company\'s corporate websites that represents company\'s purpose, services, history, etc.',
            online_shop: 'Multifunctional Online Shop',
            online_shop_description: 'Online Web Store with everything necessary, integrated payment system, user authorization mechanism, etc.',
            other: 'Other type of Websites',
            other_description: 'Other types of websites',

            container_title: 'My Work',
            container_subtitle: 'Click on the slide for details',
            container_name: 'Slender BM Merch',
            container_description: 'Slender BM Merch is an online store which sells branded merch, such as, t-shirts, bracelets, mugs, etc. You can check it out at <a href="https://slenderbm.ge">slenderbm.ge</a>',
            responsive_container_name: 'Slender BM Merch',
            responsive_container_description: 'Slender BM Merch is an online store which sells branded merch, such as, t-shirts, bracelets, mugs, etc. You can check it out at <a href="https://slenderbm.ge">slenderbm.ge</a>',

            label_full_name: 'Full Name/Company Name',
            label_email: 'Email',
            label_website_type: 'Website type',
            option_placeholder: '-- Choose preferred type --',
            option_landing: 'Landing Page/Pages',
            option_corporate: 'Company Corporate Website',
            option_online_webstore: 'Online Webstore',
            option_other: 'Other',
            submit_btn: 'Place an order',

            order_form_title: 'If you want to build a Multifunctional Website <br> based on modern standards, fill out this form below!',

            footer_social_media_title: 'Social Media',
            footer_contact: 'Contact',


            success_page_title: 'Order placed successfully!',
            success_page_text: 'Your order was placed successfully!<br>You will be redirected to homepage shortly.',

            fail_page_title: 'Order failure',
            fail_page_text: 'Your order could not be placed. <br>Try Again placing your order. You will be redirected to homepage shortly.'
        },

        ka: {
            page_title: 'პორტფოლიო - შოთა კურდღელაშვილი',
            title: 'პორტფოლიო',

            main_page: 'მთავარი',
            about_me: 'ჩემ შესახებ',
            services: 'სერვისები',
            portfolio: 'პორტფოლიო',
            contact: 'კონტაქტი',

            lang_btn_title: 'Press this button to change the layout language',

            introduction_banner_title: 'მე ვარ ვებ დეველოპერი',
            introduction_banner_subtitle: 'კეთილი იყოს თქვენი მობრძანება!',

            about_me_text: 'ვარ ვებ დეველოპერი 2-3 წლიანი გამოცდილებით. მაქვს როგორც ერთგვერდიანი ე.წ. "ლენდინგ" გვერდების აწყობის, ასევე ონლაინ მაღაზიის შექმნის გამოცდილებაც. შეგიძლიათ ჩემი ნამუშევრები იხილოთ <a class="portfolio-text" href="#portfolio">პორტფოლიოს</a> განყოფილებაში!',

            services_title: 'შემიძლია დავამზადო ნებისმიერი ტიპის ვებსაიტი',
            landing: '"Landing" გვერდები',
            landing_description: 'Landing გვერდები ონლაინ მაღაზიაზე განთავსებული საქონლის რეკლამისთვის განკუთვნილი გვერდი პროდუქტის აღწერილობით',
            corporate: 'კომპანიის კორპორატიული ვებსაიტი',
            corporate_description: 'კომპანიის კორპორატიული ვებსაიტი, სადაც განთავსებულია ინფორმაცია მისი შექმნის ისტორიაზე, მის მიზანზე, გუნდზე და სხვა კომპონენტებზე',
            online_shop: 'მრავალფუნქციური ონლაინ მაღაზია',
            online_shop_description: 'ონლაინ მაღაზია აღჭურვილი ყველა საჭირო მექანიზმით, როგორიცაა, გადახდის სისტემა, მომხმარებელთა ავტორიზაციის მექანიზმი, გადახდების ისტორია და ა.შ.',
            other: 'სხვა ტიპის ვებსაიტები',
            other_description: 'სხვა დანიშნულების მქონე ვებსაიტები',

            container_title: 'ჩემი ნამუშევრები',
            container_subtitle: 'დააჭირეთ სლაიდზე დეტალების სანახავად',
            container_name: 'Slender BM Merch',
            container_description: 'Slender BM Merch წარმოადგენს ონლაინ მაღაზიას, სადაც იყიდება ბრენდირებული მერჩი და მოიცავს მაისურებს, სამაჯურებს, ჭიქებს და ა.შ. ვებსაიტი შეგიძლიათ ნახოთ ამ მისამართზე: <a href="https://slenderbm.ge">slenderbm.ge</a>',
            responsive_container_name: 'Slender BM Merch',
            responsive_container_description: 'Slender BM Merch წარმოადგენს ონლაინ მაღაზიას, სადაც იყიდება ბრენდირებული მერჩი და მოიცავს მაისურებს, სამაჯურებს, ჭიქებს და ა.შ. ვებსაიტი შეგიძლიათ ნახოთ ამ მისამართზე: <a href="https://slenderbm.ge">slenderbm.ge</a>',            

            label_full_name: 'სახელი და გვარი /<br>კომპანიის სახელწოდება',
            label_email: 'ელ. ფოსტა',
            label_website_type: 'ვებსაიტის ტიპი',
            option_placeholder: '-- აირჩიეთ სასურველი ტიპი --',
            option_landing: '"ლენდინგ" გვერდ(ებ)ი',
            option_corporate: 'კომპანიის კორპორატიული ვებსაიტი',
            option_online_webstore: 'ონლაინ მაღაზია',
            option_other: 'სხვა',
            submit_btn: 'შეკვეთა',

            order_form_title: 'თუ გსურთ თანამედროვე სტანდარტებზე დაფუძნებული <br> მრავალფუნქციური ვებსაიტის შექმნა, შეავსეთ ეს ფორმა!',

            footer_social_media_title: 'სოციალური ქსელები',
            footer_contact: 'კონტაქტი',


            success_page_title: 'შეკვეთა წარმატებით გაფორმდა!',
            success_page_text: 'თქვენი შეკვეთა წარმატებით გაფორმდა!<br>რამდენიმე წამში დაბრუნდებით მთავარ გვერდზე.',

            fail_page_title: 'თქვენი შეკვეთა ვერ გაფორმდა',
            fail_page_text: 'სამწუხაროდ თქვენი შეკვეთა ვერ გაფორმდა. <br>სცადეთ თავიდან. რამდენიმე წამში დაბრუნდებით მთავარ გვერდზე.'
        }
    }

    const switcherDesktop = document.getElementById("language-switcher");
    const switcherResponsive = document.getElementById("language-switcher-responsive");

    function changeLanguage(lang) {
        const elements = document.querySelectorAll("[data-i18n]");
        
        elements.forEach(element => {
            const key = element.getAttribute("data-i18n");
            if (translations[lang] && translations[lang][key]) {
                element.innerHTML = translations[lang][key];
            }
        });

        document.documentElement.lang = lang;
        
        localStorage.setItem("preferredLanguage", lang);
    }

    switcherDesktop.addEventListener("change", (e) => {
        changeLanguage(e.target.value);
    });

    switcherResponsive.addEventListener("change", (e) => {
        changeLanguage(e.target.value);
    });

    const savedLang = localStorage.getItem("preferredLanguage");
    const browserLang = navigator.language.split("-")[0];
    
    let defaultLang = savedLang || (translations[browserLang] ? browserLang : "en");
    defaultLang = switcherDesktop.value || switcherResponsive.value;
    
    changeLanguage(defaultLang);
})
