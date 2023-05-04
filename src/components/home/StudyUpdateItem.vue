<template>
    <div class="study-update">
      <div class="user-info">
        <img :src="profilePicture" alt="Profile Picture">
        <div class="user-details">
          <div class="user-id">{{ userId }}</div>
          <div class="post-time">{{ postTime }}</div>
        </div>
      </div>
      <div class="subject-title">{{ subjectTitle }}</div>
      <div class="duration-bar">
        <div class="completed-time" :style="{ width: completedTime }"></div>
        <div class="remaining-time" :style="{ width: remainingTime }"></div>
      </div>
      <div class="study-description">{{ studyDescription }}</div>
      <div class="interaction">
        <div class="comment-button">
          <i class="fas fa-comment"></i>
          <span>Comment</span>
        </div>
        <div class="like-button">
          <i class="fas fa-thumbs-up"></i>
          <span>{{ likes }}</span>
        </div>
        <div class="note-button">
          <i class="far fa-sticky-note"></i>
          <span>Add Note</span>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "StudyUpdate",
    props: {
      profilePicture: String,
      userId: String,
      postTime: String,
      subjectTitle: String,
      completedTime: String,
      remainingTime: String,
      studyDescription: String,
      likes: Number,
    },
  };
  </script>
  
  <style>
  .study-update {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
  }
  
  .user-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }
  
  .user-info img {
    border-radius: 50%;
    height: 50px;
    width: 50px;
    margin-right: 10px;
  }
  
  .user-details {
    display: flex;
    flex-direction: column;
  }
  
  .post-time {
    font-size: 12px;
    color: #888;
  }
  
  .subject-title {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .duration-bar {
    background-color: #eee;
    height: 10px;
    margin-bottom: 10px;
    position: relative;
    border-radius: 5px;
  }
  
  .completed-time {
    background-color: #38c172;
    height: 10px;
    border-radius: 5px;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .remaining-time {
    background-color: #f5a623;
    height: 10px;
    border-radius: 5px;
    position: absolute;
    top: 0;
    right: 0;
  }
  
  .study-description {
    font-size: 14px;
    margin-bottom: 10px;
  }
  
  .interaction {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .interaction div {
    display: flex;
    align-items: center;
    cursor: pointer;
  }
  
  .interaction span {
    margin-left: 5px;
  }
  </style>
  