<x-container bottom>
    <x-heading title="The Team">Meet Our Team of Change Makers</x-heading>
    <div class="w-full md:w-1/2 my-10 text-lg">
        <p>
            At KHALQ Foundation Pakistan, we are proud to have a dedicated and passionate team of volunteers who are committed to making a difference in the world. Our team is made up of individuals from all walks of life, united by our shared goal of serving society.
        </p>
        <br>
        <p>
            Our team members bring a diverse range of skills, experiences, and perspectives to the table, and we believe that this diversity is what makes us strong. We are constantly learning from each other and growing as individuals and as an organization.
        </p>
        <br>
        <p>
            In addition to our volunteers, we are fortunate to have the support of a skilled and experienced office barriers who provide guidance and strategic direction for our organization.
        </p>

        Meet some of the members of our team:
    </div>
    <x-section.team.ob :obs="$obs"/>
    <x-section.join />
    <x-section.team.general :general="$general" :external="$external" :press="$press" />
</x-container>
