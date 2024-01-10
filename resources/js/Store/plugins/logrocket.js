import LogRocket from 'logrocket';
import createPlugin from 'logrocket-vuex';
const logRocketKey = import.meta.env.VITE_LOGROCKET_KEY;

let logRocketEnabled = document.head.querySelector('meta[name="logrocket-enabled"]');
if (logRocketEnabled) {
    LogRocket.init(logRocketKey);
    let logRocketId = document.head.querySelector('meta[name="logrocket-id"]');
    let logRocketIdExtra = document.head.querySelector('meta[name="logrocket-id-extra"]');
    if (logRocketId) {
        LogRocket.identify(logRocketId.content, JSON.parse(logRocketIdExtra.content));
    }
}
export default new createPlugin(LogRocket)
