<template>
    <div class="badge-item" @mouseover="showDetails" @mouseleave="hideDetails">
      <img class="badge-image" :src="badge.imageUrl" :alt="badge.title" />
      <div v-if="showDetail" class="badge-details">
        <div class="badge-title">{{ badge.title }}</div>
        <div class="badge-description">{{ badge.description }}</div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      badge: {
        type: Object,
        required: true
      }
    },
    data() {
      return {
        showDetail: false
      };
    },
    methods: {
      showDetails() {
        this.showDetail = true;
      },
      hideDetails() {
        this.showDetail = false;
      }
    }
  };
  </script>
  
  <style scoped>
  .badge-item {
    /* Add styles for the badge item container */
  }
  
  .badge-image {
    /* Add styles for the badge image */
  }
  
  .badge-details {
    /* Add styles for the badge details container (e.g., position, visibility, etc.) */
  }
  
  .badge-title {
    /* Add styles for the badge title */
  }
  
  .badge-description {
    /* Add styles for the badge description */
  }
  </style>
  