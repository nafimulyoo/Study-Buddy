import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import StudyNowView from '../views/StudyNowView.vue'
import StudyPlanView from '../views/StudyPlanView.vue'
import PeerToPeerView from '../views/PeerToPeerView.vue'
import RewardsView from '../views/RewardsView.vue'
import ProgressView from '../views/ProgressView.vue'
import DiscussionView from '../views/DiscussionView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/studynow',
    name: 'studynow',
    component: StudyNowView
  },
  {
    path: '/studyplan',
    name: 'studyplan',
    component: StudyPlanView
  },
  {
    path: '/peertopeer',
    name: 'peertopeer',
    component: PeerToPeerView
  },
  {
    path: '/rewards',
    name: 'rewards',
    component: RewardsView
  },
  {
    path: '/progress',
    name: 'progress',
    component: ProgressView
  },
  {
    path: '/discussion',
    name: 'discussion',
    component: DiscussionView
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView
  },
  {
    path: '/signup',
    name: 'signup',
    component: SignupView
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router