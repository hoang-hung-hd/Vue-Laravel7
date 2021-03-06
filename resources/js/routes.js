import LogoSymbol from './components/LogoSymbol';
import Logo from './components/Logo';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';
import SiteStates from './components/SiteStates';
import Achievements from "./components/Achievements";

let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/LoadersAndAnimations');




export  default {
    mode:'history',
    linkActiveClass:'font-bold',
    routes: [
        {
            path:'*',
            component: NotFound
        },
        {
            path:'/',
            component: Logo
        },
        {
            path:'/logo-symbol',
            component: LogoSymbol
        },
        {
            path:'/colors',
            component: Colors
        },
        {
            path:'/typography',
            component: Typography
        },
        {
            path:'/mascot',
            component: Mascot
        },
        {
            path:'/illustrations',
            component: Illustrations
        },
        {
            path:'/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path:'/wallpapers',
            component: Wallpapers
        },
        {
            path:'/site-states',
            component: SiteStates
        },
        {
            path:'/achievements',
            component: Achievements
        },
    ]

}
