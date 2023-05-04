<template>
    <div class="achievement-view">
      <friend-activity-bar></friend-activity-bar>
      <left-navigation-bar></left-navigation-bar>
      <div class="toggle-container">
        <button @click="toggleTab" class="toggle-button">{{ currentTab }}</button>
      </div>
      <div v-if="isAchievementTab" class="achievement-tab">
        <div class="view-selector">
          <button @click="switchAchievementView('all')" class="view-button">View All Achievements</button>
          <button @click="switchAchievementView('unlocked')" class="view-button">View Unlocked Achievements</button>
          <button @click="switchAchievementView('locked')" class="view-button">View Locked Achievements</button>
        </div>
        <div class="achievement-list">
          <achievement-item v-for="achievement in filteredAchievements" :key="achievement.id" :achievement="achievement"></achievement-item>
        </div>
      </div>
      <div v-else class="badge-tab">
        <div class="badge-grid">
          <badge-item v-for="badge in badges" :key="badge.id" :badge="badge"></badge-item>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import FriendActivityBar from '@/components/general/FriendActivityBar.vue';
  import LeftNavigationBar from '@/components/general/LeftNavigationBar.vue';
  import AchievementItem from '@/components/achievement/AchievementItem.vue';
  import BadgeItem from '@/components/achievement/BadgeItem.vue';
  
  export default {
    components: {
      FriendActivityBar,
      LeftNavigationBar,
      AchievementItem,
      BadgeItem
    },
    data() {
      return {
        currentTab: 'Achievements',
        isAchievementTab: true,
        currentAchievementView: 'all',
        achievements: [], // Fetch achievements data
        badges: [], // Fetch badges data
      };
    },
    computed: {
      filteredAchievements() {
        if (this.currentAchievementView === 'all') {
          return this.achievements;
        }
        return this.achievements.filter(achievement => achievement.status === this.currentAchievementView);
      }
    },
    methods: {
      toggleTab() {
        this.isAchievementTab = !this.isAchievementTab;
        this.currentTab = this.isAchievementTab ? 'Badges' : 'Achievements';
      },
      switchAchievementView(view) {
        this.currentAchievementView = view;
      }
    }
  };
  </script>
  
  <style scoped>
  .achievement-view {
    /* Add styles for the main container */
  }
  
  .toggle-container {
    /* Add styles for the toggle container */
  }
  
  .toggle-button {
    /* Add styles for the toggle button */
  }
  
  .view-selector {
    /* Add styles for the view selector container */
  }
  
  .view-button {
    /* Add styles for the view buttons */
  }
  
  .achievement-list {
    /* Add styles for the achievement list container */
  }
  
  .badge-grid {
    /* Add styles for the badge grid container */
  }
  </style>