const api_key = "6eeb380c34db8946d1046e2a4c53d167";

const btnEl = document.getElementById("btn");
const infoContainer = document.getElementById("info");

const getWeather = async (userInput) => {
  const response = await fetch(
    `https://api.openweathermap.org/data/2.5/weather?q=${userInput}&appid=${api_key}&units=metric`,
  );

  const data = await response.json();

  if (!response.ok) {
    infoContainer.innerHTML = `<h2 class = "mt-8 text-customDarkBlue uppercase text-xl md:text-2xl ">City Not Found</h2>`;
  }

  console.log(data);

  const cityName = data.name;
  const temp = Math.round(data.main.temp);
  const icon = data.weather[0].icon;
  const description = data.weather[0].description;
  const feelsLike = Math.round(data.main.feels_like);
  const humidity = data.main.humidity;
  const windSpeed = data.wind.speed;
  console.log(windSpeed);

  infoContainer.innerHTML = ` <div class="flex flex-col items-center space-y-8 md:space-y-6"></div>
                    <h2
                        id="city"
                        class="mt-6 text-3xl md:text-4xl uppercase -tracking-tighter text-customWhite"
                    >
                        ${cityName}
                    </h2>
                    <img
                        id="w-img"
                        src="http://openweathermap.org/img/wn/${icon}.png"
                        class=" text-4xl w-[90px] h-[90px] md:w-[110px] md:h-[110px]"
                    />
                    <h2 id="temp" class=" text-4xl md:text-5xl text-customWhite">${temp}&degC</h2>
                    <span
                        id="desc"
                        class="md:text-3xl text-xl mt-4 md:mt-8  -tracking-tighter text-customDarkBlue font-bold uppercase --tracking-tighter"
                        >${description}</span
                    >
                </div>

                <div class="flex justify-between mt-6 space-x-2 md:space-x-6">
                    <div class="p-1.5 flex flex-col space-y-2">
                        <p
                            class="text-customDarkBlue w-[80px] md:text-2xl md:w-full text-center"
                        >
                            Feels Like
                        </p>
                        <p
                            id="feels"
                            class="text-center text-customWhite text-xl md:text-3xl"
                        >
                            ${feelsLike}&degC
                        </p>
                    </div>
                    <div class="p-1.5 rounded-lg flex flex-col space-y-2">
                        <p class="text-customDarkBlue md:text-2xl">Humidity</p>
                        <p
                            id="humidity"
                            class="text-center text-customWhite md:text-3xl text-xl"
                        >
                            ${humidity}%
                        </p>
                    </div>
                    <div class="p-1.5 rounded-lg flex flex-col space-y-2">
                        <p
                            class="text-customDarkBlue w-[100px] md:text-2xl md:w-full text-center"
                        >
                            Wind Speed
                        </p>
                        <p
                            id="wind"
                            class="text-center text-customWhite text-xl md:text-3xl"
                        >
                            ${windSpeed}m/s
                        </p>
                    </div>
                </div> 
    `;
};
btnEl.addEventListener("click", () => {
  const userInput = document.getElementById("input").value;
  getWeather(userInput);
});
