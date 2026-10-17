<!-- Indentation is key here -->
<div class="code-lines"><span class="kw">class_name</span> PlayerController
<span class="kw">extends</span> CharacterBody2D

<span class="kw">signal</span> <span class="fn">player_moved</span>(_new_position: Vector2)

<span class="kw">func</span> <span class="fn">move</span>(_new_position: Vector2):
    position = _new_position
    <span class="fn">player_moved</span>.emit(_new_position)
