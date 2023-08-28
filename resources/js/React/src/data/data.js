export const data = (lang) => {
   return {
      navbar: [
         {
            text: lang == "ar" ? "الرئسية" : "Home",
            link: "/",
            active: true,
            clicked: (_) => window.scrollTo(0, 0),
         },
         {
            text: lang == "ar" ? "من نحن" : "About Us",
            link: "/about",
            active: true,
            clicked: (_) => window.scrollTo(0, 0),
         },
         {
            text: lang == "ar" ? "خدماتنا" : "Services",
            link: "/#services",
            active: false,
            clicked: (_) => {
               const serv = document.querySelector("#services");
               if (serv) serv.scrollIntoView();
               else return;
            },
         },
         {
            text: lang == "ar" ? "مراحل المشروع" : "Project phases",
            link: "/project",
            active: true,
            clicked: (_) => window.scrollTo(0, 0),
         },
         {
            text: lang == "ar" ? "المدونة" : "Blog",
            link: "/blog",
            active: true,
            clicked: (_) => window.scrollTo(0, 0),
         },
         {
            text: lang == "ar" ? "اتصل بنا" : "Contact",
            link: "/contact",
            active: true,
            clicked: (_) => window.scrollTo(0, 0),
         },
      ],
      customers: {
         text: lang == "ar" ? "منطقة العملاء" : "customer area",
         link: "/login",
         methodLogin: "",
      },
      home: {
         about: lang == "ar" ? "من نحن" : "About Us",
         services: lang == "ar" ? "خدماتنا" : "services",
         packages: lang == "ar" ? "الباقات" : "packages",
         form: {
            name: {
               placeholder: lang == "ar" ? "الاسم" : "Name",
               msg: lang == "ar" ? "يرجي كتابة اسمك" : "Please write your name",
            },
            email: {
               placeholder:
                  lang == "ar" ? "البريد الالكترونى" : "Email Address",
               msg:
                  lang == "ar"
                     ? "يرجي كتابك بريدك الالكتروني"
                     : "Please write your email address",
               emailMsg:
                  lang == "ar"
                     ? "برجاء ملئ الايميل بطريقة صحيحة"
                     : "Please fill in the email correctly",
            },
            phone: {
               placeholder: lang == "ar" ? "رقم الهاتف" : "Mobile Number",
               msg:
                  lang == "ar"
                     ? "يرجي كتابك رقم هاتفك"
                     : "Please write your phone number",
            },
            title: {
               placeholder: lang == "ar" ? "تفاصيل الطلب" : "Order details",
               msg:
                  lang == "ar"
                     ? "يرجي ملئ جميع البيانات"
                     : "Please fill in all information",
            },
            message: {
               placeholder:
                  lang == "ar"
                     ? "هل لديك مواقع مشابهة"
                     : "Do you have similar sites?",
               msg:
                  lang == "ar"
                     ? "يرجي ملئ جميع البيانات"
                     : "Please fill in all information",
            },
            btn: {
               text: lang == "ar" ? "ارسل الان" : "Submit",
            },
            msg: {
               success:
                  lang == "ar" ? "تمت العملية بنجاح" : "Data sent successfully",
               error: lang == "ar" ? "حدث خطا" : "an error occurred",
            },
         },
      },
      about: {
         text: lang == "ar" ? "من نحن" : "About Us",
         link: "/about",
         home: lang == "ar" ? "الرئسية" : "Home",
         titleFeat: lang == "ar" ? "الرؤية" : "Vision",
      },
      projects: {
         text: lang == "ar" ? "مراحل المشروع" : "Project phases",
         link: "/project",
         home: lang == "ar" ? "الرئسية" : "Home",
      },
      blogs: {
         text: {
            text: lang == "ar" ? "المدونة" : "blogs",
            link: "/blog",
            home: lang == "ar" ? "الرئسية" : "Home",
         },
         pageText: {
            newText: lang == "ar" ? "اضيف حديثا" : "New Post",
            all: lang == "ar" ? "جميع المقالات" : "All Blogs",
            btnPopup: lang == "ar" ? "تابع القراءة" : "Read on",
         },
         post: {
            header: {
               linksHome: lang == "ar" ? "الرئسية" : "Home",
               linkBlog: lang == "ar" ? "المدونة" : "Blog",
               date: lang == "ar" ? "تم النشر" : "Published",
            },
            footer: {
               share: lang == "ar" ? "شارك المدونة" : "Share post",
               views: lang == "ar" ? "مشاهدات" : "views",
            },
         },
      },
      contact: {
         text: {
            text: lang == "ar" ? "اتصل بنا" : "Contact",
            link: "/blog",
            home: lang == "ar" ? "الرئسية" : "Home",
         },
         pageText:
            lang == "ar"
               ? "يسعدنا تواصلك معنا"
               : "We are pleased to contact you",
         form: {
            name: {
               placeholder: lang == "ar" ? "الاسم" : "Name",
               msg: lang == "ar" ? "يرجي كتابة اسمك" : "Please write your name",
            },
            email: {
               placeholder:
                  lang == "ar" ? "البريد الالكترونى" : "Email Address",
               msg:
                  lang == "ar"
                     ? "يرجي كتابك بريدك الالكتروني"
                     : "Please write your email address",
               emailMsg:
                  lang == "ar"
                     ? "برجاء ملئ الايميل بطريقة صحيحة"
                     : "Please fill in the email correctly",
            },
            phone: {
               placeholder: lang == "ar" ? "رقم الهاتف" : "Mobile Number",
               msg:
                  lang == "ar"
                     ? "يرجي كتابك رقم هاتفك"
                     : "Please write your phone number",
            },
            title: {
               placeholder: lang == "ar" ? "عنوان الرسالة" : "Message Title",
               msg:
                  lang == "ar"
                     ? "يرجي ملئ جميع البيانات"
                     : "Please fill in all information",
            },
            message: {
               placeholder: lang == "ar" ? "تفاصيل الرسالة" : "Message details",
               msg:
                  lang == "ar"
                     ? "يرجي ملئ جميع البيانات"
                     : "Please fill in all information",
            },
            button: {
               text: lang == "ar" ? "ارسل الان" : "Submit",
            },
            msg: {
               success:
                  lang == "ar" ? "تمت العملية بنجاح" : "Data sent successfully",
               error: lang == "ar" ? "حدث خطا" : "an error occurred",
            },
         },
      },
      partners: {
         text: lang == "ar" ? "شركاؤنا" : "Partners",
         link: "/partners",
         home: lang == "ar" ? "الرئسية" : "Home",
         title: lang == "ar" ? "شركائنا في النجاح" : "Our partners in success",
      },
      privacy: {
         text: lang == "ar" ? "سياسة الخصوصية" : "Privacy policy",
         link: "/privacy",
         home: lang == "ar" ? "الرئسية" : "Home",
      },
      videos: {
         text: lang == "ar" ? "الفيديوهات" : "Videos",
         link: "/videos",
         home: lang == "ar" ? "الرئسية" : "Home",
         title: lang == "ar" ? "قائمة الفيديوهات" : "Video list",
      },
      slider: {
         post: {
            speed: 2000,
            autoplaySpeed: 4000,
         },
         home: {
            speed: 2000,
            autoplaySpeed: 4000,
         },
      },
      footer: {
         routes: {
            home: lang == "ar" ? "الرئسية" : "Home",
            about: lang == "ar" ? "من نحن" : "About Us",
            services: lang == "ar" ? "خدماتنا" : "Services",
            contact: lang == "ar" ? "اتصل بنا" : "Contact",
            projects: lang == "ar" ? "مراحل المشروع" : "Projects",
            blog: lang == "ar" ? "المدونة" : "Blog",
            partners: lang == "ar" ? "شركاؤنا" : "Partners",
            privacy: lang == "ar" ? "سياسية الخصوصية" : "Privacy",
            videos: lang == "ar" ? "فيديوهات" : "Videos",
         },
         copyRight: {
            text: lang == "ar" ? "جميع الحقوق محفوظة" : "all rights are save",
            site: "Zerotech 2022",
         },
      },
      login: {
         form: {
            title: lang == "ar" ? "تسجيل الدخول" : "Login",
            username: {
               label:
                  lang == "ar"
                     ? "اسم المستخدم أو البريد الالكتروني"
                     : "Username or Email Address",
               placeholder:
                  lang == "ar"
                     ? "اسم المستخدم أو البريد الالكتروني"
                     : "Username or Email Address",
            },
            password: {
               label: lang == "ar" ? "كلمة المرور" : "Password",
               placeholder: lang == "ar" ? "كلمة المرور" : "Password",
            },
            button: lang == "ar" ? "دخول" : "Login"
         },
         text: {
            title: lang == "ar" ? "تسجيل الدخول" : "Login",
            body: ""
         }
      },
   };
};
