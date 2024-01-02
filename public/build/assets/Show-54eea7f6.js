import{_ as m}from"./Navbar-a1e31528.js";import{C as g,F as v}from"./CourseCard-3437690c.js";import{Z as w,j as i,e,b as c,a as t,t as l,f as n,g as r,w as p,F as b,o}from"./app-74ab7dfa.js";import{_ as k}from"./_plugin-vue_export-helper-c27b6911.js";import"./ApplicationMark-058410c4.js";import"./ResponsiveNavLink-0df5454d.js";const f={components:{CourseCard:g,Footer:v,Navbar:m,Head:w},props:["users","course","old_courses","upcoming_courses","can_enroll","enrollments","invoice"],methods:{confirmCourse(){this.$inertia.post(route("courses.invoices",{id:this.courses.id}))}}},y={class:"main-content max-height-vh-100 h-100"},x=t("div",{class:"pt-5 pb-6 bg-cover",style:{"background-image":"url('/img/header-blue-purple.jpg')"}},null,-1),C={class:"container my-3 py-3"},N={class:"my-5"},F={class:"grid-row-2 tw-grid md:tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-12"},P={class:"d-flex"},V={key:0,class:"border-radius-xl",src:"https://ptc-ksa.net/wp-content/uploads/2023/09/top-view-abstract-representation-financial-crisis-e1694680164907.png",width:"650"},j=t("br",null,null,-1),B={key:1,class:"border-radius-xl",src:"https://ptc-ksa.net/wp-content/uploads/2023/12/top-view-workspace-with-glasses-cup-tea1.png",width:"650"},H=t("br",null,null,-1),z={key:2,class:"border-radius-xl",src:"https://ptc-ksa.net/wp-content/uploads/2023/12/financial-business2.png",width:"650"},M=t("br",null,null,-1),S={key:3,class:"border-radius-xl",src:"https://ptc-ksa.net/wp-content/uploads/2023/12/40.png",width:"650"},D=t("br",null,null,-1),E={key:4,class:"border-radius-xl",src:"https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg",width:"650"},T=t("br",null,null,-1),Z=t("h5",null,"معلومات عن الدورة",-1),q={class:"tw-grid tw-grid-cols-2 tw-mt-10"},A=t("h5",null,"الفترة",-1),G=t("br",null,null,-1),I=t("br",null,null,-1),J=t("div",null,[t("h5",null,"الموقع"),t("p",null,"قاعة فندقية")],-1),K=t("h5",null,"المقاعد المتاحة",-1),L=t("h5",null,"السعر",-1),O=t("div",null,null,-1),Q={key:0},R=t("hr",{class:"horizontal mb-4 dark"},null,-1),U={class:"tw-grid tw-text-center tw-grid-col-1 md:tw-grid-cols-1 lg:tw-grid-cols-2"},W={key:0,class:"lg:tw-text-right"},X={class:"tw-text-green-700 tw-text-sm py-2"},Y={key:0,class:"mt-2"},$={key:0},tt={key:0},st=["href"],et={key:1},ot={key:1},nt=t("hr",{class:"horizontal mb-4 dark"},null,-1),lt=t("h4",{class:"tw-text-red-500"},"انتهت الدورة!",-1),it=t("p",{class:"tw-text-gray-400"},"يمكنك تصفح دوراتنا القادمة وحجز مقعدك مبكرا",-1),ct=[nt,lt,it];function rt(d,dt,s,at,_t,ut){const a=i("Head"),_=i("Navbar"),u=i("inertia-link"),h=i("Footer");return o(),e(b,null,[c(a,{title:d.$t("words.courses")},null,8,["title"]),c(_),t("main",y,[x,t("div",C,[t("h2",N,l(s.course.title),1),t("div",F,[t("div",null,[t("div",P,[s.course.title==="إدارة الازمات"?(o(),e("img",V)):n("",!0),j,s.course.title==="أساسيات الأعمال المكتبية"?(o(),e("img",B)):n("",!0),H,s.course.title==="القيادة الإدارية"?(o(),e("img",z)):n("",!0),M,s.course.title==="إدارة المشاريع الاحترافية (®PMP) - دورة معتمدة"?(o(),e("img",S)):n("",!0),D,s.course.title==="PMP"?(o(),e("img",E)):n("",!0),T])]),t("div",null,[Z,t("p",null,l(s.course.description),1),t("div",q,[t("div",null,[A,t("p",null,[r(l(s.course.from_date),1),G,r(" "+l(s.course.to_date),1),I,r(" ("+l(s.course.days)+") ايام ",1)])]),J,t("div",null,[K,t("p",null,l(s.course.seats_available),1)]),t("div",null,[L,t("p",null,l(s.course.price)+" ر.س.",1)])])]),O,s.can_enroll?(o(),e("div",Q,[R,t("div",U,[s.course.is_user_enrolled?(o(),e("div",W,[t("div",null,[t("div",X," تاريخ التسجيل: "+l(s.enrollments.enrolled_at),1)]),s.invoice.paid_at===null?(o(),e("div",Y," لتأكيد حجز مقعدك قم بسداد الفاتورة ")):n("",!0)])):n("",!0),t("div",null,[s.course.is_user_enrolled?(o(),e("div",$,[s.invoice.paid_at?(o(),e("div",tt,[t("a",{class:"btn-grad-secondary",href:d.route("invoices.show",{id:s.enrollments.invoice_id})},"عرض الفاتورة",8,st)])):n("",!0)])):n("",!0),s.course.is_user_enrolled?n("",!0):(o(),e("div",et,[c(u,{href:d.route("courses.confirm",s.course.id),class:"btn-grad-secondary"},{default:p(()=>[r(" سجل الان ")]),_:1},8,["href"])]))])])])):(o(),e("div",ot,ct))]),c(h,{class:"container"})])])],64)}const bt=k(f,[["render",rt]]);export{bt as default};