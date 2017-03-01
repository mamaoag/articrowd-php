<template>
    <div>
        <h1>HELLO</h1>
        <button @click="submit">SEE</button>
    </div>
</template>
<script>
    export default{
        mounted() {

        },
        methods: {
            submit() {
                axios.get('/view').then((r) => {
                    self.location.replace(r.body)
                })
            }
        }
    }
</script>

