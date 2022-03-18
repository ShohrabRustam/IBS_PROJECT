<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: rgb(238, 232, 222);
}
.nav-bar {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding-top: 10px;
  padding-bottom: 10px;
}

.hero-section {
  height: 90vh;
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-bottom: 7vh;
  background-color: hsl(256, 26%, 20%);
}
.hero-text-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  color: white;
}
.hero-text-container > h1 {
  font-size: 70px;
  font-weight: 800;
  line-height: 1.1;
  margin-bottom: 15px;
}
.hero-text-container > p {
  font-weight: 400;
  margin-bottom: 15px;
}
.hero-text-container > button {
  padding: 8px 20px;
  border: 2px solid white;
  color: white;
  background: none;
  cursor: pointer;
  outline: none;
  font-weight: 500;
}
.hero-img-container > img {
  margin-left: -10rem;
  /* margin-top: 7rem; */
  width: 500px;
}
.features-section {
  margin-top: 10vh;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 15vh;
}
.features-section > h1 {
  font-size: 60px;
  font-weight: 800;
  color: hsl(256, 26%, 20%);
}
.feature-items-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 25px;
}
.feature-item {
  height: max-content;
  width: max-content;
  margin-right: 25px;
}
.feature-item > img {
  width: 65px;
}
.feature-item > h1 {
  color: hsl(256, 26%, 20%);
  margin-bottom: 15px;
  /* margin-top: 15px; */
}
.feature-item > p {
  color: hsl(273, 4%, 51%);
  font-weight: 500;
}
.clt-section {
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  background-color: hsl(256, 26%, 20%);
  height: 30vh;
  margin-bottom: 15vh;
  color: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.clt-section > h1 {
  font-size: 45px;
  font-weight: 700;
}
.clt-section > button {
  padding: 8px 20px;
  border: 2px solid white;
  color: white;
  background: none;
  cursor: pointer;
  outline: none;
  font-weight: 500;
}
.footer-section {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}
.logo-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 50px;
    padding-bottom: 20px;
}
.menu {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
}
.menu > h1 {
    font-size: 26px;
    font-weight: 700;
    padding-bottom: 20px;
    color: hsl(256, 26%, 20%);
}
.menu-items {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
}
.menu-items > a {
    text-decoration: none;
    text-transform: uppercase;
    color: hsl(256, 26%, 20%);
    font-weight: 500;
    padding-bottom: 10px;
}
.social-container > img {
    margin-left: 10px;
    cursor: pointer;
}
body {

    /* background-color: rgb(211, 233, 182); */
    display: flex;
    flex-direction: column;
    color: rebeccapurple;
    height: 100vh;
}
.footer {
  background-color: rgba(0, 0, 0, 0.103);
  height: 45vh;
}
.footer-menu-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
footer{
    text-align: center;
    background-color: rgb(247, 232, 233);
    width: 100vw;
    height: 5rem;
    margin-top: auto;
}
header{
    height: 50px;
}

</style>
