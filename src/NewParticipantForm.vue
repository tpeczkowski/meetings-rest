<template>
  <div>
    <form @submit.prevent="add()">
      <label>Firstname</label>
      <input type="text" v-model="newParticipant.firstname">
      <label>Lastname</label>
      <input type="text" v-model="newParticipant.lastname">
      <button>Add new participant</button>
    </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {newParticipant: {}};
    },
    methods: {
      add() {
        this.$emit('added', this.newParticipant);
        this.newParticipant = {};
      }
    }
  };
</script>
