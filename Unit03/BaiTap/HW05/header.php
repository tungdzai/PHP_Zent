<nav class="navbar">
    <div class="headerWrap">
        <div class="headerLeft">
            <span class="headerLeft_logo">Start Bootstrap</span>
            <button class="headerLeft_iconShow" ><i class="fas fa-bars"></i></button>
        </div>
        <div class="headerRight">
            <div class="inputSearchWrap">
                <input class="inputSearch" type="text" placeholder="Search for..."/>
                <button class="buttonSearch"><i class="fas fa-search"></i></button>
            </div>
            <div class="user">
                <i class="fas fa-user fa-fw"></i>
            </div>
        </div>
    </div>
</nav>
<style lang="scss">
    .navbar {
        color: white;
        background-color: black;

    }

    .headerWrap {
        display: flex;
        justify-content: space-between;
    }
    .headerLeft{
        margin: 10px;
        font-size: 20px;
    }
    .headerLeft_logo{
        padding:  0 10px;
    }
    .headerLeft_iconShow{
        border: none;
        background-color: black;
        color: white;
        cursor: pointer;
        padding-left: 30px;
    }
    .headerRight{
        display: flex;
        margin: 10px;
        font-size: 20px;
    }
    .inputSearchWrap{
        padding-right: 40px;
    }
    .inputSearch{
        outline: none;
        border-radius: 7px;
        padding: 3px 5px;
    }
    .buttonSearch{
        background-color: #0066ff;
        padding: 6px;
        border-radius: 10px;
        color: white;
    }
    .user{
       font-size: 20px;
        padding: 6px;
    }

</style>