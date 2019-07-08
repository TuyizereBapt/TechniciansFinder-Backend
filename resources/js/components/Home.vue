<template>
    <div class="wrapper">
        <header class="nav">
            <div class="brand">
                MeetTech
            </div>
            <div class="menu-section">
                <ul class="left-section">
                    <li>
                        <a class="active" href="">Home</a>
                    </li>
                </ul>
                <ul class="right-section">
                    <li>
                        <a href="/register">Register</a>
                    </li>
                    <li>
                        <a href="/login">Log In</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="content">
            <div class="search-section">
                <h1 class="heading center">Find Nearby Technicians</h1>
                <small class="center">
                    Search through our data set technicians that are around in your neighborhood.
                    The search results are well curated in such a way that the nearest ones come first.
                </small>
                <div class="search-box">
                    <div class="left-side">
                        What are you looking for?
                    </div>
                    <div class="search-field">
                        <input type="text" placeholder="Type here...">
                    </div>
                    <div class="right-side">
                        <div class="drop-down">
                            <span class="selected-category">
                                All categories <i class="fa fa-chevron-down"></i>
                            </span>
                            <ul class="dropdown-items hidden" @click="showOrHideList">
                                <li>Item 1</li>
                                <li>Item 2</li>
                                <li>Item 3</li>
                                <li>Item 4</li>
                            </ul>
                        </div>
                        <button class="btn-search">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <small>All rights reserved. @ 2019</small>
        </div>
    </div>
</template>

<script>
    export default {
        name: "home",
        mounted() {
            document.querySelector('.selected-category').addEventListener('click', this.showOrHideList)
        },
        beforeDestroy() {
            document.querySelector('.selected-category').removeEventListener('click', this.showOrHideList)
        },
        data() {
            return {}
        },
        methods: {
            showOrHideList(e) {
                if (e.srcElement.nodeName === "LI")
                    e.srcElement.parentElement.classList.toggle('hidden')
                else
                    e.srcElement.nextSibling.classList.toggle('hidden')
            }
        }
    }
</script>

<style scoped lang="scss">
    $pad-sides: 80px;
    $bg-color: rgba(0, 0, 0, 0.4);
    $color: white;
    $white-1: rgba(255, 255, 255, 0.1);

    *{
        font-family: Helvetica, Arial, sans-serif !important;
    }
    body,html{
        margin: 0;
        padding: 0;
        font-size: 16px;
    }

    .wrapper {
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .nav {
        padding: 16px $pad-sides;
        background-color: $bg-color;
        color: $color;
        display: flex;
        align-items: center;
        border-bottom: 1px solid $white-1;
    }

    .menu-section {
        display: flex;
        justify-content: space-between;
        margin: 0 0 0 40px;
        width: 100%;
    }

    .left-section,
    .right-section {
        list-style: none;
        display: flex;
        padding: 0;
        margin: 0;
        li {
            margin: 0 4px;
            padding: 0;
            a {
                padding: 0 16px;
                height: 32px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 32px;
                color: white;
                text-decoration: none;
                &.active,
                &:hover {
                    background-color: red;
                }
            }
        }
    }

    .heading {
        color: $color;
    }

    .center {
        text-align: center;
    }

    .search-section {
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mg-t-16 {
        margin-top: 32px;
    }

    .content {
        padding: 8px $pad-sides;
        background-color: $bg-color;
        color: $color;
        flex-grow: 2;
    }

    .search-box {
        background-color: $color;
        height: 56px;
        margin: 32px auto;
        border-radius: 32px;
        padding: 8px;
        display: flex;
        color: black;
        align-items: center;
        width: 80%;
    }

    .left-side {
        width: 30%;
        /*text-align: center;*/
    }

    .search-field {
        width: 35%;
        display: flex;
        align-items: center;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        padding: 0 8px;
        height: 100%;
        input {
            height: 32px;
            padding: 0 20px;
            outline: none;
            font-size: 15px;
            color: #808080;
            margin: 0;
            max-width: 100%;
            width: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #fff;
            border: none;
            box-shadow: none;
            font-weight: 500;
            opacity: 1;
            border-radius: 0;
        }
    }

    .right-side {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        width: 35%;
        .btn-search {
            color: $color;
            background-color: red;
            height: 40px;
            border-radius: 32px;
            border: none;
            outline: none;
            min-width: 104px;
            margin-left: 16px;
        }
    }

    .drop-down {
        position: relative;
        padding: 0 8px;
        height: 32px;
        .selected-category {
            cursor: pointer;
        }
        .dropdown-items {
            list-style: none;
            margin: 0;
            background-color: $color;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            position: absolute;
            right: 0;
            top: 32px;
            padding: 8px 0;
            min-width: 104px;
            li {
                cursor: pointer;
                padding: 0px 16px;
                &:hover {
                    background-color: $bg-color;
                    color: $color;
                }
            }
        }
    }

    .hidden {
        display: none;
    }

    .footer {
        background-color: $color;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>