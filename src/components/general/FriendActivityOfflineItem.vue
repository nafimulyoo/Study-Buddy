<template>
    <div class="friend-activity-offline">
      <img :src="friend.profilePicture" :alt="friend.username" />
      <p>{{ friend.username }}</p>
      <p>{{ friend.lastStudySubject }}</p>
      <p>{{ friend.lastSeen }}</p>
      <button @click="inviteToStudy">Invite to Study</button>
  </div>
</template>

<script>
export default {
  props: {
    friend: {
      type: Object,
      required: true,
    },
  },
  methods: {
    inviteToStudy() {
      // Add your implementation for inviting a friend to study
    },
  },
};
</script>

<style scoped>
.friend-activity-offline {
  display: flex;
  align-items: center;
  padding: 0.5rem;
  margin-bottom: 1rem;
}
img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 0.5rem;
}
</style>