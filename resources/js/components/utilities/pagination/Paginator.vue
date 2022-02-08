<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item" 
                    v-if="results.current_page > 1"
                    @click.prevent="$emit('get-page', results.current_page - 1)">
                    <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#" @click.prevent="$emit('get-page', results.current_page + 1)">Next <i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.results)
        },
        props: ['results']
    }
</script>

<style>

</style>