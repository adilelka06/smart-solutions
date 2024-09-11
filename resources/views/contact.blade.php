<x-layouts.app title="Contact">
    <h1>Contact</h1>
    <p>Heb je vragen of opmerkingen? Neem dan gerust contact met ons op. We helpen je graag verder. </p>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="subject">Onderwerp</label>
            <input type="text" id="subject" name="subject">
        </div>
        <div class="form-group">
            <label for="message">Bericht</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button type="submit">Verstuur</button>
    </form>
</x-layouts.app>

