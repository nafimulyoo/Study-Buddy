<template>
    <div class="study-progress-view">
      <div class="grid-container">
        <div class="profile-section">
          <!-- Profile picture, user id, user description (bio), user since, user tags -->
        </div>
        <div class="study-hour-section">
          <!-- "Total study hour" title, study hour duration, rank on global leaderboard -->
        </div>
        <div class="achievement-section">
          <!-- Achievements, if clicked, shows list of achievement -->
        </div>
        <div class="badge-section">
          <!-- Badges, if clicked, show icons of badges -->
        </div>
        <div class="statistics-section">
          <!-- Title "Statistics", shows list of statistics -->
        </div>
        <div class="calendar-section">
          <calendar></calendar>
        </div>
      </div>
      <div class="my-study-progress">
        <h2>My Study Progress</h2>
        <div class="study-update-list">
          <study-update-item v-for="update in studyUpdates" :key="update.id" :update="update"></study-update-item>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Calendar from '@/components/study-progress/CalendarItem.vue';
  import StudyUpdateItem from '@/components/home/StudyUpdateItem.vue';
  
  export default {
    components: {
      Calendar,
      StudyUpdateItem
    },
    data() {
      return {
        studyUpdates: [], // Fetch study updates data
      };
    },
  };
  </script>
  
  <style scoped>
  .study-progress-view {
    /* Add styles for the main container */
  }
  
  .grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: repeat(3, 1fr);
    gap: 1rem;
  }
  
  .profile-section {
    /* Add styles for the profile section */
  }
  
  .study-hour-section {
    /* Add styles for the study hour section */
  }
  
  .achievement-section {
    /* Add styles for the achievement section */
  }
  
  .badge-section {
    /* Add styles for the badge section */
  }
  
  .statistics-section {
    /* Add styles for the statistics section */
  }
  
  .calendar-section {
    /* Add styles for the calendar section */
  }
  
  .my-study-progress {
    /* Add styles for the my study progress container */
  }
  
  .study-update-list {
    /* Add styles for the study update list container */
  }
  </style>
  