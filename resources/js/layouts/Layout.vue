<template>
    <div>
        <Navbar />
        <Sidebar />
        <div class="content">
            <slot />
        </div>
    </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import Navbar from '../components/Navbar.vue';

export default {
    components: {
        Navbar,
        Sidebar
    }
}
</script>
