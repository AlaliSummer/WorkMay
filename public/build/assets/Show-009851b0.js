import{_ as p}from"./AppLayout-330560dc.js";import c from"./DeleteUserForm-3d670f48.js";import l from"./LogoutOtherBrowserSessionsForm-201bfcc0.js";import{S as s}from"./SectionBorder-406af284.js";import f from"./TwoFactorAuthenticationForm-b4d5c4fc.js";import u from"./UpdatePasswordForm-284e8617.js";import _ from"./UpdateProfileInformationForm-b45ad6bb.js";import{c as d,w as n,o as e,a as i,e as r,b as t,f as a,F as h}from"./app-4aa0f750.js";import"./ProfileNavbar-1a6736b9.js";import"./ApplicationMark-de2d5444.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./ResponsiveNavLink-9673c99a.js";import"./DialogModal-b49f467d.js";import"./SectionTitle-1aa01ffa.js";import"./DangerButton-326ac459.js";import"./InputError-d79ebb51.js";import"./SecondaryButton-90f34071.js";import"./TextInput-81caca6d.js";import"./ActionMessage-7b81daee.js";import"./PrimaryButton-29c251a4.js";import"./InputLabel-538f5ba2.js";import"./FormSection-4ae55432.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$=i("div",null,null,-1),w={class:"max-w-7xl mx-auto pt-6 sm:px-6 lg:px-8"},k={key:0},v={key:1},x={key:2},L={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(o,y)=>(e(),d(p,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[$,i("div",null,[i("div",w,[o.$page.props.jetstream.canUpdateProfileInformation?(e(),r("div",k,[t(_,{user:o.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),o.$page.props.jetstream.canUpdatePassword?(e(),r("div",v,[t(u,{class:"sm:mt-0"}),t(s)])):a("",!0),o.$page.props.jetstream.canManageTwoFactorAuthentication?(e(),r("div",x,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"sm:mt-0"},null,8,["sessions"]),o.$page.props.jetstream.hasAccountDeletionFeatures?(e(),r(h,{key:3},[t(s),t(c,{class:"sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{L as default};
