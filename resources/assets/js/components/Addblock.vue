<template>
    <div>
        <transition-group name="fade" tag="p">
            <fieldset v-for="(block, index) in blocks" v-bind:key="index">
                <legend>{{ block }}</legend>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="Image" v-bind:name="'link_block[' + index + '][image]'" value="" />
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" v-bind:name="'link_block[' + index + '][title]'" value="" />
                </div>

                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" class="form-control" placeholder="Sub Title" v-bind:name="'link_block[' + index + '][sub_title]'" value="" />
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" placeholder="Content" v-bind:name="'link_block[' + index + '][content]'" value="" />
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" placeholder="Link" v-bind:name="'link_block[' + index + '][link]'" value="" />
                </div>
            </fieldset>
        </transition-group>
        <p>
            <button v-on:click="add" type="button" class="btn btn-primary">Add Link Block</button>
        </p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                blocks: [
                    'Link Block 1'
                ]
            }
        },

        methods: {
            add: function () {
                var title = 'Link Block ' + parseInt(this.blocks.length + 1)
                this.blocks.push(title)
            }
        }
    }
</script>
