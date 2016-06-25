<script>
    import bootbox from 'bootbox';
    export default {
        props: {
            message: String,
            icon: String,
            href: String,
            method: {
                type: String,
                default: 'post'
            },
        },
        methods: {
            showConfirm() {
                bootbox.confirm(this.message, (result) => {
                    if (result) this.makeRequest();
                })
            },

            makeRequest() {
                $.ajax({
                    url: this.href,
                    method: this.method,
                    error(response) {
                        bootbox.alert(response.responseText)
                    },
                    success() {
                        window.location.reload();
                    }
                })
            }

        }
    }
</script>

<template>
    <a href="#" class="{{class}}" v-on:click="showConfirm">
        <i class="fa fa-{{icon}}" v-if="icon">&nbsp;&nbsp;</i>
        <slot></slot>
    </a>
</template>

<style>
</style>
