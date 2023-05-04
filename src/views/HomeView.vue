<template>
  <div class="home-view">
    <LeftNavigationBar />
    <FriendActivityBar />

    <div class="content">
      <h1>Home</h1>
      <GoStudy />

      <div class="study-updates">
        <StudyUpdate
          v-for="update in studyUpdates"
          :key="update.id"
          :update="update"
        />
      </div>
    </div>
  </div>
</template>

<script>
import LeftNavigationBar from '@/components/general/LeftNavigationBar.vue';
import FriendActivityBar from '@/components/general/FriendActivityBar.vue';
import GoStudy from './GoStudy.vue';
import StudyUpdate from './StudyUpdate.vue';

export default {
  components: {
    LeftNavigationBar,
    FriendActivityBar,
    GoStudy,
    StudyUpdate,
  },
  data() {
    return {
      studyUpdates: [], // Add your study updates data
    };
  },
};
</script>

<style scoped>
.home-view {
  display: flex;
  min-height: 100vh;
}

.content {
  flex-grow: 1;
  padding: 2rem;
  display: flex;
  flex-direction: column;
}

.study-updates {
  margin-top: 1rem;
  display: flex;
  flex-direction: column;
}
</style>
