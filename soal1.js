const biodata = (myname, myage) => ({
    name: myname,
    age: myage,
    address: "Jl. H. Ahmad Margasari Karawaci Kota Tangerang",
    hobbies: ["sport", "coding"],
    is_married: false,
    list_school: [
      {
        name: "MI Al-Husna Margasari",
        year_in: 2008,
        year_out: 2014,
        major: null,
      },
      {
        name: "MTs Daarul Irfan",
        year_in: 2014,
        year_out: 2017,
        major: null,
      },
      {
        name: "SMKN 4 Tangerang",
        year_in: 2017,
        year_out: 2020,
        major: null,
      },
    ],
    skills: [
      {
        skill_name: "Frontend Developer",
        level: "Advanced",
      },
      {
        skill_name: "Backend Developer",
        level: "Advanced",
      },
    ],
    interest_in_coding: true,
  });
  
  console.log(biodata("Prio Arief Gunawan", 17));
  