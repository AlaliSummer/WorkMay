import{_ as p}from"./AppLayout-2228934a.js";import n from"./DeleteUserForm-73e6d0ed.js";import{c,w as i,o,a as m,e as r,b as t,f as a,F as d}from"./app-5f81ebdc.js";import{S as s}from"./SectionBorder-af628d97.js";import l from"./TwoFactorAuthenticationForm-a27da553.js";import _ from"./UpdatePasswordForm-efb173fd.js";import u from"./UpdateProfileInformationForm-c14fa298.js";import"./ProfileNavbar-31808b1f.js";import"./ApplicationMark-7af3986b.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-3d15c1ee.js";import"./DialogModal-17b59ab1.js";import"./SectionTitle-451fd804.js";import"./DangerButton-6ae3685b.js";import"./InputError-001999fc.js";import"./SecondaryButton-b7bab291.js";import"./TextInput-e7b0cf35.js";import"./PrimaryButton-4229e191.js";import"./InputLabel-e8ff57de.js";import"./ActionMessage-ba19a0a6.js";import"./FormSection-c9af7d67.js";const f=m("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Dashboard ",-1),h={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},g={key:0},$={key:1},k={key:2},H={__name:"Dashboard",setup(w){return(e,y)=>(o(),c(p,{title:"Dashboard"},{header:i(()=>[f]),default:i(()=>[m("div",null,[m("div",h,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",g,[t(u,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",$,[t(_,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",k,[t(l,{"requires-confirmation":e.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(d,{key:3},[t(s),t(n,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{H as default};
