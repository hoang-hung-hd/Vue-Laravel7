<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Achievements
        </h1>

        <input type="text" v-model="token"
               placeholder ="Input the token"
                @keyup.enter = "fetchAchievements"
                class="border p-2 rounded w-full">
        <ul>
            <li v-for="achievement in achievements"
                v-text="achievement.name"
            ></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Achievements",
    data() {
        return {
            achievements: [],
            token: ''
        };
    },
    methods: {
        fetchAchievements() {
            axios.get(`http://127.0.0.1:8000/api/achievements?api_token=${this.token}`)
                .then(response => {
                    this.achievements = response.data;
                })
        }
    }
}
</script>

<style scoped>

</style>
