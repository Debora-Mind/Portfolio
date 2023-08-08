import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'Index',
            component: () => import('@/views/Index.vue'),
        },
        {
            path: '/hardskill',
            name: 'HardSkill',
            component: () => import('@/views/HardSkill.vue'),
        },
        {
            path: '/softskill',
            name: 'SoftSkill',
            component: () => import('@/views/SoftSkill.vue'),
        },
        {
            path: '/formacoes',
            name: 'Formacoes',
            component: () => import('@/views/Formacoes.vue'),
        },
        {
            path: '/projetos',
            name: 'Projetos',
            component: () => import('@/views/Projetos.vue'),
        },
        {
            path: '/metas',
            name: 'Metas',
            component: () => import('@/views/Metas.vue'),
        },
    ]
})

export default router