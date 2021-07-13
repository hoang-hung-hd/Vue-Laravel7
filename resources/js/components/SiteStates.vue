<template>
    <div>
        <strong>Site States</strong>
        <ul>
            <li><strong>Total section </strong>: {{ series }}</li>
            <li><strong>Total lession </strong>: {{ lessons }}</li>
        </ul>

    </div>

</template>

<script>
export default {
    name: "SiteStates",
    data() {
        return {
            series: 0,
            lessons: 0
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/states')
            .then(response => response.data)
            .then(data => {
            this.series = data.series;
            this.lessons = data.lessons;
        });
    }
}
</script>

<style scoped>

</style>
