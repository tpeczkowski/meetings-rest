<template>
  <div>
    <ol>
      <li v-for="person in list">
        {{ person.firstname }}
        {{ person.lastname }}
      </li>
    </ol>
  </div>
</template>

<script>
  export default {
    props: ['list']
  };
</script>
