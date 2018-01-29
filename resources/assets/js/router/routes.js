export default [
  { path: "/", name: "welcome", component: require("@/pages/welcome") },

  // Routes publiques
  ...middleware("guest", [
    { path: "/login", name: "login", component: require("@/pages/auth/login") },
    { path: "/register", name: "register", component: require("@/pages/auth/register") },
    { path: "/forgot", name: "forgot", component: require("@/pages/auth/password/email") },
    { path: '/password/reset/:token', name: 'password.reset', component: require('@/pages/auth/password/reset') }
  ]),

  // Routes sécurisées
  ...middleware("auth", [
    { path: "/home", name: "home", component: require("@/pages/home") },
    { path: "/ruchers", name: "ruchers", component: require("@/pages/ruchers") },
    { path: "/ruches", name: "ruches", component: require("@/pages/ruches") },
    { path: "/visites", name: "visites", component: require("@/pages/visites") },
    { path: "/recoltes", name: "recoltes", component: require("@/pages/recoltes") },
  ]),

  { path: "*", component: require("@/pages/errors/404.vue") }
];

/**
 * @param  {String|Function} middleware
 * @param  {Array} routes
 * @return {Array}
 */
function middleware(middleware, routes) {
  routes.forEach(route =>
    (route.middleware || (route.middleware = [])).unshift(middleware)
  );

  return routes;
}
