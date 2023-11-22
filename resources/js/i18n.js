import { createI18n } from 'vue-i18n'
import Locale from './vue-i18n-locales.generated'

const lang = document.documentElement.lang.substr(0, 2)

const i18n = createI18n({
  legacy: false,
  locale: lang,
  fallbackLocale: 'en',
  messages: Locale
})

export default i18n
