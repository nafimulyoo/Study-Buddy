<template>
    <div class="achievement-item">
      <div class="achievement-title">{{ achievement.title }}</div>
      <div class="achievement-description">{{ achievement.description }}</div>
      <div class="achievement-difficulty">{{ achievement.difficulty }}</div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      achievement: {
        type: Object,
        required: true
      }
    }
  };
  </script>
  
  <style scoped>
  .achievement-item {
    /* Add styles for the achievement item container */
  }
  
  .achievement-title {
    /* Add styles for the achievement title */
  }
  
  .achievement-description {
    /* Add styles for the achievement description */
  }
  
  .achievement-difficulty {
    /* Add styles for the achievement difficulty */
  }
  </style>
  