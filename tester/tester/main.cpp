//
//  main.cpp
//  tester
//
//  Created by Sailesh Rajanala on 4/12/21.
//


#include <fstream>
#include <vector>
#include <iostream>

using namespace std;

int main()
{
    /*
     
     INSERT INTO Industry_Partner_Database (Prefix, Suffix, First_Name, Last_Name, Email, Phone_Number, Employer, Job_Title, State, City, College_Education, Associates_Degree, Technical_Degree, College_Degree_Year, BS_school, BS_other_school, BS_field, other_BS_field, BS_Eng_Discipline, other_BS_Eng_Discipline, have_MS_degree, MS_other_school, MS_year, MS_field, other_MS_field, MS_Eng_Discipline, other_MS_Eng_Discipline, have_PHD_degree, PHD_other_school, PHD_year, special_degree, Involvement, Involvement_Level, Recruitment_Level, Mentor_Age, Role_Model, other_Role_Model, Involvement_Notes) VALUES ('Mr.', 'Jr.', 'Yo yo', 'Jackson', 'yo.jackson@j.com', '12312312321', 'asd', 'Sad', 'AZ', 'Asdasd', '5', '', '', '2021', '1', '', '3', '', '1, 3, 4, 5, 6, 7, 8, 10, 13, 15, 16, Other Discipline', 'sadsa@', '2', 'YO YO university', '2021', '7', 'Assadasdasd', '', '', '2', 'YO university ', '2021', 'HHAHA mechanicssss@', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10', '1, 2, 3', '1, 2, 3, 4', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, Other', 'asdas', 'no idea I want to see perfection@!!!!!!! jasdjkasjkdjsajkfd');
     
     */
    
    vector<string> Prefix, Suffix,
    First_Name{
           "Sailesh", "Mahesh", "Rakesh", "Laura", "Neon", "Raj","Ram","Ahri", "Akali", "Alistar", "Amumu", "Anivia", "Annie", "Aphelios", "Ashe", "Aurelion Sol", "Azir", "Bard", "Blitzcrank", "Brand", "Braum", "Caitlyn", "Camille", "Cassiopeia", "Cho'Gath", "Corki", "Darius", "Diana", "Dr. Mundo", "Draven", "Ekko", "Elise", "Evelynn", "Ezreal", "Fiddlesticks", "Fiora", "Fizz", "Galio", "Gangplank", "Garen", "Gnar", "Gragas", "Graves", "Hecarim", "Heimerdinger", "Illaoi", "Irelia", "Ivern", "Janna", "Jarvan IV", "Jax", "Jayce", "Jhin", "Jinx", "Kai'Sa", "Kalista", "Karma", "Karthus", "Kassadin", "Katarina", "Kayle", "Kayn", "Kennen", "Kha'Zix", "Kindred", "Kled", "Kog'Maw", "LeBlanc", "Lee Sin", "Leona", "Lillia", "Lissandra", "Lucian", "Lulu", "Lux", "Malphite", "Malzahar", "Maokai", "Master Yi", "Miss Fortune", "Mordekaiser", "Morgana", "Nami", "Nasus", "Nautilus", "Neeko", "Nidalee", "Nocturne", "Nunu and Willump", "Olaf", "Orianna", "Ornn", "Pantheon", "Poppy", "Pyke", "Qiyana", "Quinn", "Rakan", "Rammus", "Rek'Sai", "Rell", "Renekton", "Rengar", "Riven", "Rumble", "Ryze", "Samira", "Sejuani", "Senna", "Seraphine", "Sett", "Shaco", "Shen", "Shyvana", "Singed", "Sion", "Sivir", "Skarner", "Sona", "Soraka", "Swain", "Sylas", "Syndra", "Tahm Kench", "Taliyah", "Talon", "Taric", "Teemo", "Thresh", "Tristana", "Trundle", "Tryndamere", "Twisted Fate", "Twitch", "Udyr", "Urgot", "Varus", "Vayne", "Veigar", "Vel'Koz", "Vi", "Viktor", "Vladimir", "Volibear", "Warwick", "Wukong", "Xayah", "Xerath", "Xin Zhao", "Yasuo", "Yone", "Yorick", "Yuumi", "Zac", "Zed", "Ziggs", "Zilean", "Zoe", "Zyra", "Priyanka", "Subash", "Shiva", "Meera", "Mira", "Kal El", "Bruce", "Barry", "Joey", "Pokemo", "Thor", "Odin", "Freya", "Kratos", "Akhil", "Aditya", "Jaya", "Gowri", "Shankar", "Binyang"
    },
    Last_Name {"Rajanala", "Limbu", "Wayne", "Acharya", "Karki", "El'Capitan", "Mojave", "Sierra", "Alpachinooo", "Treavori", "Trsihak", "Babji", "Nagulakonda", "Honeyakn", "Warrio", "Pentavio", "Agean", "Von Don Kon", "Johnson", "Zavala", "Louis", "Phillipe", "Solly", "Ranger", "Cook", "Bake", "Wichitason", "PastaSauce", "Smellight", "Mjolnirokan", "Stavangar"
        "Novofarhk", "Alpharender", "RetinaSwifters", "Lin"
        
    },
    Email {"gmail", "ymail", "yomail", "live", "outlook", "mail", "forcemail", "eyefind", "senseit", "feeleef", "leaffruit", "hotairbaloon"
        
    },
    Phone_Number {
        "316", "417", "916", "867", "133", "233", "534", "754", "771", "423"
    },
    Employer {
        "Wichita State University", "Alabonera", "Rockstar Games", "Ubisoft", "Microsoft", "Google", "Cherry Garden", "Dominos Pizza", "Pizza Hut",
        "Code Academy", "Crumbl Cookies", "Sailesh Rajanala Constructions", "Sailesh Rajanala Industries", "Rajanala Multiplex", "Sailesh IMAX", "Hotel Rajanala", "Four Bullets", "Seven Seconds", "Nine Realms"
        
    },
    Job_Title {
        "Clerk", "Vice President", "Senior Designing Vice President", "President", "CFO", "CEO", "Manager", "Assistant Mannager", "Financial Officer", "Develoeper", "Engineer", "Full Stack Developer", "Product Tester",
        "Quality Assurance Inspector", "Programmer", "Business Analyst"
    },
    State {
        "Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Minor Outlying Islands", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "U.S. Virgin Islands", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
    },
    City {
        "Wichita", "Stavanger", "Vizag", "Pokhara", ""
    },
    College_Education {"1","2","3","4","5"}, Associates_Degree, Technical_Degree, College_Degree_Year, BS_school, BS_other_school, BS_field, other_BS_field, BS_Eng_Discipline, other_BS_Eng_Discipline, have_MS_degree, MS_other_school, MS_year, MS_field, other_MS_field, MS_Eng_Discipline, other_MS_Eng_Discipline, have_PHD_degree, PHD_other_school, PHD_year, special_degree, Involvement, Involvement_Level, Recruitment_Level, Mentor_Age, Role_Model, other_Role_Model, Involvement_Notes;
    
    
    Prefix.push_back("Mr.");
    Prefix.push_back("Mx.");
    Prefix.push_back("Ms.");
    Prefix.push_back("Madam.");
    Prefix.push_back("Sir.");
    Prefix.push_back("Dr.");
    Prefix.push_back("Master.");
    Prefix.push_back("Miss.");
    
    Suffix.push_back("Jr.");
    Suffix.push_back("Sr.");
    Suffix.push_back("I");
    Suffix.push_back("II");
    Suffix.push_back("III");
    Suffix.push_back("IV");
    Suffix.push_back("V");
    Suffix.push_back("VI");
    Suffix.push_back("VII");
    Suffix.push_back("VIII.");
    Suffix.push_back("IX");
    Suffix.push_back("X");
    Suffix.push_back("XI");
    Suffix.push_back("XII");
    Suffix.push_back("XIII");
    Suffix.push_back("XIV");
    Suffix.push_back("XV");
    Suffix.push_back("XVI");
    Suffix.push_back("XVII");
    Suffix.push_back("XVIII");
    
    return 0;
}
