| SYNTAX TEST "PHP (Datastar).sublime-syntax"

<!--
 -- Core Attributes
 -- https://data-star.dev/reference/overview#core-attributes
 -->

<!-- Computed Signals -->

<div data-computed-repeated="$input.repeat(2)">
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                  ^^^^^^^^ variable.other.signal.datastar
|                          ^ punctuation.separator.key-value.html
|                           ^^^^^^^^^^^^^^^^^^ meta.string.html
|                           ^ string.quoted.double.html punctuation.definition.string.begin.html
|                            ^^^^^^^^^^^^^^^^ source.js.embedded.html
|                            ^^^^^^ variable.other.dollar.js
|                                  ^ punctuation.accessor.js
|                                   ^^^^^^ meta.function-call variable.function.js
|                                         ^^^ meta.function-call meta.group.js
|                                         ^ punctuation.section.group.begin.js
|                                          ^ meta.number.integer.decimal.js constant.numeric.value.js
|                                           ^ punctuation.section.group.end.js
|                                            ^ meta.string.html string.quoted.double.html punctuation.definition.string.end.html
    <div data-text="$repeated">...</div>
|        ^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|        ^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^ punctuation.separator.key-value.html
|                  ^^^^^^^^^^^ meta.string.html
|                  ^ string.quoted.double.html punctuation.definition.string.begin.html
|                   ^^^^^^^^^ source.js.embedded.html variable.other.dollar.js
|                            ^ string.quoted.double.html punctuation.definition.string.end.html
|                             ^ punctuation.definition.tag.end.html
</div>

<div data-computed="{repeated: $input.repeat(2)}">
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^ punctuation.separator.key-value.html
|                  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                  ^ string.quoted.double.html punctuation.definition.string.begin.html
|                   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.mapping.js
|                   ^ punctuation.section.mapping.begin.js
|                    ^^^^^^^^ meta.mapping.key.js
|                            ^ punctuation.separator.key-value.js
|                              ^^^^^^ variable.other.dollar.js
|                                    ^ punctuation.accessor.js
|                                     ^^^^^^ meta.function-call variable.function.js
|                                           ^^^ meta.function-call meta.group.js
|                                              ^ punctuation.section.mapping.end.js
|                                               ^ string.quoted.double.html punctuation.definition.string.end.html
|                                                ^ punctuation.definition.tag.end.html

<!-- Declared Signals -->

<div data-signals-input="1"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^^^^^ variable.other.signal.datastar
|                      ^ punctuation.separator.key-value.html
|                       ^^^ meta.string.html
|                       ^ string.quoted.double.html punctuation.definition.string.begin.html
|                        ^ source.js.embedded.html meta.number.integer.decimal.js constant.numeric.value.js
|                         ^ string.quoted.double.html punctuation.definition.string.end.html

<div data-signals-form.input="2"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^^^^ variable.namespace.datastar
|                     ^ punctuation.accessor.dot.datastar - variable
|                      ^^^^^ variable.other.signal.datastar
|                           ^ punctuation.separator.key-value.html
|                            ^^^ meta.string.html
|                            ^ string.quoted.double.html punctuation.definition.string.begin.html
|                             ^ source.js.embedded.html meta.number.integer.decimal.js constant.numeric.value.js
|                              ^ string.quoted.double.html punctuation.definition.string.end.html

<div data-signals="{input: 1, form: {input: 2}}"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                ^ punctuation.separator.key-value.html
|                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                 ^ string.quoted.double.html punctuation.definition.string.begin.html
|                  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.mapping.js
|                  ^ punctuation.section.mapping.begin.js
|                   ^^^^^ meta.mapping.key.js
|                                    ^^^^^ meta.mapping.key.js
|                                             ^ punctuation.section.mapping.end.js
|                                              ^ string.quoted.double.html punctuation.definition.string.end.html

<div data-signals="{
|    ^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                ^ punctuation.separator.key-value.html
|                 ^^^ meta.string.html
|                 ^ string.quoted.double.html punctuation.definition.string.begin.html
|                  ^^ source.js.embedded.html meta.mapping.js
|                  ^ punctuation.section.mapping.begin.js
        id: 1,
|^^^^^^^^^^^^^^ meta.directive.binding.datastar meta.string.html source.js.embedded.html
|       ^^ meta.mapping.key.js
        firstName: 'John',
        lastName: 'Doe',
        email: 'joe@blow.com'
    }">
|^^^^^ meta.directive.binding.datastar meta.string.html
|^^^^ source.js.embedded.html meta.mapping.js
|   ^ punctuation.section.mapping.end.js
|    ^ string.quoted.double.html punctuation.definition.string.end.html


<!--
 -- DOM Attributes
 -- https://data-star.dev/reference/overview#dom-attributes
 -->

<!-- Data Attributes -->

<button data-attr-disabled="$input == ''">Save</button>
|       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|       ^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                         ^ punctuation.separator.key-value.html
|                          ^^^^^^^^^^^^^^ meta.string.html
|                          ^ string.quoted.double.html punctuation.definition.string.begin.html
|                           ^^^^^^^^^^^^ source.js.embedded.html
|                           ^^^^^^ variable.other.dollar.js
|                                       ^ string.quoted.double.html punctuation.definition.string.end.html

<button data-attr="{disabled: $input == '', title: $input}">Save</button>
|       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|       ^^^^^^^^^ entity.other.attribute-name.datastar.html
|                ^ punctuation.separator.key-value.html
|                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                 ^ string.quoted.double.html punctuation.definition.string.begin.html
|                  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.mapping.js
|                                                         ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- Data Binding -->

<input data-bind-input />
|      ^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|                ^^^^^ variable.other.signal.datastar
|                     ^ - meta.attribute-with-value - entity - variable
|                      ^^ punctuation.definition.tag.end.html

<input data-bind-_local />
|      ^^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|                ^^^^^^ variable.other.signal.datastar
|                      ^ - meta.attribute-with-value - entity - variable
|                       ^^ punctuation.definition.tag.end.html

<input data-bind="input" />
|      ^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|      ^^^^^^^^^ entity.other.attribute-name.datastar.html
|               ^ punctuation.separator.key-value.html
|                ^^^^^^^ meta.string.html
|                ^ string.quoted.double.html punctuation.definition.string.begin.html
|                 ^^^^^ variable.other.signal.datastar
|                      ^ string.quoted.double.html punctuation.definition.string.end.html
|                       ^ - meta.attribute-with-value - string
|                        ^^ punctuation.definition.tag.end.html

<!-- Data Class -->

<button data-class-hidden="$input == ''">Save</button>
|       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|       ^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                        ^ punctuation.separator.key-value.html
|                         ^^^^^^^^^^^^^^ meta.string.html
|                         ^ string.quoted.double.html punctuation.definition.string.begin.html
|                          ^^^^^^^^^^^^ source.js.embedded.html
|                          ^^^^^^ variable.other.dollar.js
|                                      ^ string.quoted.double.html punctuation.definition.string.end.html

<button data-class="{hidden: $input == '', 'font-bold': $input == 1}">Save</button>
|       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|       ^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^ punctuation.separator.key-value.html
|                  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                  ^ string.quoted.double.html punctuation.definition.string.begin.html
|                   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.mapping.js
|                                                                   ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- Data Events -->

<div data-on-click="@clipboard()">
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^ punctuation.separator.key-value.html
|                  ^^^^^^^^^^^^^^ meta.string.html
|                  ^ string.quoted.double.html punctuation.definition.string.begin.html
|                   ^^^^^^^^^^^^ source.js.embedded.html
|                               ^ string.quoted.double.html punctuation.definition.string.end.html
|                                ^ punctuation.definition.tag.end.html

<div data-on-click__debounce.5.0ms__once.true="@clipboard()">
|^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.tag.block.any.html
|^^^ entity.name.tag.block.any.html
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                 ^^ punctuation.separator.modifier.datastar
|                   ^^^^^^^^ storage.modifier.datastar
|                           ^ punctuation.separator.key-value.datastar
|                            ^^^^^ constant.other.value.datastar - punctuation
|                                 ^^ punctuation.separator.modifier.datastar
|                                   ^^^^ storage.modifier.datastar
|                                       ^ punctuation.separator.key-value.datastar
|                                        ^^^^ constant.other.value.datastar
|                                            ^ punctuation.separator.key-value.html
|                                             ^^^^^^^^^^^^^^ meta.string.html
|                                             ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                              ^^^^^^^^^^^^ source.js.embedded.html
|                                                          ^ string.quoted.double.html punctuation.definition.string.end.html

<div data-on="{click: @clipboard(), options: { debounce: '5.0ms', once: true }}">
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^ entity.other.attribute-name.datastar.html
|           ^ punctuation.separator.key-value.html
|            ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|            ^ string.quoted.double.html punctuation.definition.string.begin.html
|             ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.mapping
|                                                                              ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- Persistence -->

<div data-persist ></div>

<div data-persist="foo bar" ></div>

<!-- Persists `$foo.bar.baz` -->
<div data-signals-foo.bar.baz="1"
     data-persist="foo.*.baz"
></div>

<!-- Persists `$foo.bar.baz` -->
<div data-signals-foo.bar.baz="1"
     data-persist="foo.**"
></div>

<div data-persist__session="foo bar"></div>

<!-- References -->

<div data-ref-foo></div>
|    ^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|             ^^^ variable.other.signal.datastar

<div data-ref="foo"></div>
|    ^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^ entity.other.attribute-name.datastar.html
|            ^ punctuation.separator.key-value.html
|             ^^^^^ meta.string.html
|             ^ string.quoted.double.html punctuation.definition.string.begin.html
|              ^^^ variable.other.signal.datastar
|                 ^ string.quoted.double.html punctuation.definition.string.end.html

<div data-ref-my-signal__case.camel></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|             ^^^^^^^^^ variable.other.signal.datastar
|                      ^^ punctuation.separator.modifier.datastar
|                        ^^^^ storage.modifier.datastar
|                            ^ punctuation.separator.key-value.datastar
|                             ^^^^^ constant.other.value.datastar
|                                  ^ punctuation.definition.tag.end.html

<div data-ref-my-signal__debounce.1ms></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|             ^^^^^^^^^ variable.other.signal.datastar
|                      ^^ punctuation.separator.modifier.datastar
|                        ^^^^^^^^ storage.modifier.datastar
|                                ^ punctuation.separator.key-value.datastar
|                                 ^^^ constant.other.value.datastar
|                                    ^ punctuation.definition.tag.end.html

<!-- Replace URL -->

<div data-replace-url="`/page${page}`"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|    ^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                    ^ punctuation.separator.key-value.html
|                     ^^^^^^^^^^^^^^^^ meta.string.html
|                     ^ string.quoted.double.html punctuation.definition.string.begin.html
|                      ^^^^^^^^^^^^^^ source.js.embedded.html meta.string
|                      ^^^^^^ string.quoted.other.js
|                      ^ punctuation.definition.string.begin.js
|                            ^^^^^^^ meta.interpolation.js
|                            ^^ punctuation.section.interpolation.begin.js
|                              ^^^^ source.js.embedded variable.other.readwrite.js
|                                  ^ punctuation.section.interpolation.end.js
|                                   ^ string.quoted.other.js punctuation.definition.string.end.js
|                                    ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- Show Elements -->

<button data-show="$input != ''">Save</button>
|       ^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|       ^^^^^^^^^ entity.other.attribute-name.datastar.html
|                ^ punctuation.separator.key-value.html
|                 ^^^^^^^^^^^^^^ meta.string.html
|                 ^ string.quoted.double.html punctuation.definition.string.begin.html
|                  ^^^^^^^^^^^^ source.js.embedded.html
|                  ^^^^^^ variable.other.dollar.js
|                         ^^ keyword.operator.comparison.js
|                            ^^ meta.string.js string.quoted.single.js
|                            ^ punctuation.definition.string.begin.js
|                             ^ punctuation.definition.string.end.js
|                              ^ string.quoted.double.html punctuation.definition.string.end.html


<!--
 -- Browser Attributes
 -- https://data-star.dev/reference/overview#browser-attributes
 -->

<!-- Custom Validity -->

<form>
  <input data-bind-foo name="foo" />
  <input data-bind-bar name="bar" data-custom-validity="$foo === $bar ? '' : 'Field values must be the same.'" />
|                                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|                                 ^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                                                     ^ punctuation.separator.key-value.html
|                                                      ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                                                      ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                                       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html
|                                                                                                            ^ string.quoted.double.html punctuation.definition.string.end.html
</form>

<!-- On Viewport Intersection -->

<div data-on-intersect__once__full="$fullyIntersected = true"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                     ^^ punctuation.separator.modifier.datastar
|                       ^^^^ storage.modifier.datastar
|                           ^^ punctuation.separator.modifier.datastar
|                             ^^^^ storage.modifier.datastar
|                                 ^ punctuation.separator.key-value.html
|                                  ^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                                  ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                   ^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html
|                                                           ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- On Interval -->

<div data-on-interval__duration.500ms="$count++"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                    ^^ punctuation.separator.modifier.datastar
|                      ^^^^^^^^ storage.modifier.datastar
|                              ^ punctuation.separator.key-value.datastar
|                               ^^^^^ constant.other.value.datastar
|                                    ^ punctuation.separator.key-value.html
|                                     ^^^^^^^^^^ meta.string.html
|                                     ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                      ^^^^^^^^ source.js.embedded.html
|                                              ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- On DOM loaded -->

<div data-on-load__delay.500ms="$count = 1"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                ^^ punctuation.separator.modifier.datastar
|                  ^^^^^ storage.modifier.datastar
|                       ^ punctuation.separator.key-value.datastar
|                        ^^^^^ constant.other.value.datastar
|                             ^ punctuation.separator.key-value.html
|                              ^^^^^^^^^^^^ meta.string.html
|                              ^ string.quoted.double.html punctuation.definition.string.begin.html
|                               ^^^^^^^^^^ source.js.embedded.html
|                                         ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- On Requested Animation Frame -->

<div data-on-raf="$count++"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|    ^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|               ^ punctuation.separator.key-value.html
|                ^^^^^^^^^^ meta.string.html
|                ^ string.quoted.double.html punctuation.definition.string.begin.html
|                 ^^^^^^^^ source.js.embedded.html
|                         ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- On Signal Change -->

<div data-on-signal-change-foo="$fooCount++"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                          ^^^ variable.other.signal.datastar
|                             ^ punctuation.separator.key-value.html
|                              ^^^^^^^^^^^^^ meta.string.html
|                              ^ string.quoted.double.html punctuation.definition.string.begin.html
|                               ^^^^^^^^^^^ source.js.embedded.html
|                                          ^ string.quoted.double.html punctuation.definition.string.end.html

<!-- Listen for changes to `$foo.bar.baz` -->
<div data-signals-foo.bar.baz="1"
     data-on-signal-change-foo.*.baz="$fooCount++"
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                          ^^^ variable.namespace.datastar
|                             ^ punctuation.accessor.dot.datastar
|                              ^ variable.namespace.datastar constant.other.wildcard.asterisk.datastar
|                               ^ punctuation.accessor.dot.datastar
|                                ^^^ variable.other.signal.datastar
|                                   ^ punctuation.separator.key-value.html
|                                    ^^^^^^^^^^^^^ meta.string.html
|                                    ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                     ^^^^^^^^^^^ source.js.embedded.html
|                                                ^ string.quoted.double.html punctuation.definition.string.end.html

     data-on-signal-change-foo.**="$fooCount++"
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                          ^^^ variable.namespace.datastar
|                             ^ punctuation.accessor.dot.datastar
|                              ^^ variable.other.signal.datastar constant.other.wildcard.asterisk.datastar
|                                ^ punctuation.separator.key-value.html
|                                 ^^^^^^^^^^^^^ meta.string.html
|                                 ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                  ^^^^^^^^^^^ source.js.embedded.html
|                                             ^ string.quoted.double.html punctuation.definition.string.end.html
></div>

<!-- Scroll elemnt into view -->

<div data-scroll-into-view__smooth></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar entity.other.attribute-name.datastar.html
|                         ^^ punctuation.separator.modifier.datastar
|                           ^^^^^^ storage.modifier.datastar
|                                 ^ punctuation.definition.tag.end.html
|                                  ^^ punctuation.definition.tag.begin.html
|                                    ^^^ entity.name.tag.block.any.html

<!-- Set View Transition name -->

<div data-view-transition="$foo"></div>
|    ^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.other.datastar
|    ^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                        ^ punctuation.separator.key-value.html
|                         ^^^^^^ meta.string.html
|                         ^ string.quoted.double.html punctuation.definition.string.begin.html
|                          ^^^^ source.js.embedded.html variable.other.dollar.js
|                          ^ punctuation.dollar.js
|                              ^ string.quoted.double.html punctuation.definition.string.end.html


<!--
 -- Backend Attributes
 -- https://data-star.dev/reference/overview#backend-attributes
 -->

<input data-indicator-fetching />
|      ^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|                     ^^^^^^^^ variable.other.signal.datastar
|                             ^ - meta.attribute-with-value - entity - variable
|                              ^^ punctuation.definition.tag.end.html

<input data-indicator-_local />
|      ^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar entity.other.attribute-name.datastar.html
|                     ^^^^^^ variable.other.signal.datastar
|                           ^ - meta.attribute-with-value - entity - variable
|                            ^^ punctuation.definition.tag.end.html

<input data-indicator="fetching" />
|      ^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.binding.datastar
|      ^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                    ^ punctuation.separator.key-value.html
|                     ^^^^^^^^^^ meta.string.html
|                     ^ string.quoted.double.html punctuation.definition.string.begin.html
|                      ^^^^^^^^ variable.other.signal.datastar
|                              ^ string.quoted.double.html punctuation.definition.string.end.html
|                               ^ - meta.attribute-with-value - string
|                                ^^ punctuation.definition.tag.end.html


<!--
 -- Action Plugins
 -- https://data-star.dev/reference/overview#action-plugins
 -->

<button data-on-click="@get('/api/get/' + $id)">
|                      ^^^^ support.function.action.js.datastar
|                          ^^^^^^^^^^^^^^^^^^^ meta.group.js

<button data-on-click="@post('/api/post/' + $id)">
|                      ^^^^^ support.function.action.js.datastar
|                           ^^^^^^^^^^^^^^^^^^^^ meta.group.js

<button data-on-click="@put('/api/put/' + $id)">
|                      ^^^^ support.function.action.js.datastar
|                          ^^^^^^^^^^^^^^^^^^^ meta.group.js

<button data-on-click="@patch('/api/patch/' + $id)">
|                      ^^^^^^ support.function.action.js.datastar
|                            ^^^^^^^^^^^^^^^^^^^^^ meta.group.js

<button data-on-click="@delete('/api/delete/' + $id)">
|                      ^^^^^^^ support.function.action.js.datastar
|                             ^^^^^^^^^^^^^^^^^^^^^^ meta.group.js


<!--
 -- Browser Actions
 -- https://data-star.dev/reference/overview#browser-actions
 -->

<button data-on-click="@clipboard()">
|                      ^^^^^^^^^^ support.function.action.js.datastar
|                                ^^ meta.group.js


<!--
 -- Utility Actions
 -- https://data-star.dev/reference/overview#utility-actions
 -->

<input type="checkbox" data-bind-checkboxes.checkbox1 /> Checkbox 1
<input type="checkbox" data-bind-checkboxes.checkbox2 /> Checkbox 2
<input type="checkbox" data-bind-checkboxes.checkbox3 /> Checkbox 3
<button data-on-click="@setAll('checkboxes.*', true)">Check All</button>

<button data-on-click="@setAll()">
|                      ^^^^^^^ support.function.action.js.datastar
|                             ^^ meta.group.js

<button data-on-click="@toggleAll()">
|                      ^^^^^^^^^^ support.function.action.js.datastar
|                                ^^ meta.group.js

<button data-on-click="@fit()">
|                      ^^^^ support.function.action.js.datastar
|                          ^^ meta.group.js

<!--
 PHP specific tests
 -->

<my-<?php $tag ?> data-on-<?php $event ?>__debounce.<?php $in_ms ?>="$signal == '<?= $value ?>'">
| <- meta.tag punctuation.definition.tag.begin.html
|^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ text.html.php meta.tag
|^^^ entity.name.tag - meta.embedded.php
|   ^^^^^^^^^^^^^ entity.name.tag meta.embedded.php
|   ^^^^^ punctuation.section.embedded.begin.php
|        ^^^^^^ source.php.embedded.html
|         ^^^^ variable.other.php
|              ^^ punctuation.section.embedded.end.php
|                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.directive.event.datastar
|                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ entity.other.attribute-name.datastar.html
|                         ^^^^^^^^^^^^^^^ meta.embedded.php
|                         ^^^^^ punctuation.section.embedded.begin.php
|                              ^^^^^^^^ source.php.embedded.html
|                               ^^^^^^ variable.other.php
|                                      ^^ punctuation.section.embedded.end.php
|                                        ^^ punctuation.separator.modifier.datastar
|                                          ^^^^^^^^ storage.modifier.datastar
|                                                  ^ punctuation.separator.key-value.datastar
|                                                   ^^^^^^^^^^^^^^^ constant.other.value.datastar meta.embedded.php
|                                                   ^^^^^ punctuation.section.embedded.begin.php
|                                                        ^^^^^^^^ source.php.embedded.html
|                                                         ^^^^^^ variable.other.php
|                                                                ^^ punctuation.section.embedded.end.php
|                                                                  ^ punctuation.separator.key-value.html
|                                                                   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.string.html
|                                                                   ^ string.quoted.double.html punctuation.definition.string.begin.html
|                                                                    ^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html
|                                                                    ^^^^^^^ variable.other.dollar.js
|                                                                    ^ punctuation.dollar.js
|                                                                            ^^ keyword.operator.comparison.js
|                                                                               ^^^^^^^^^^^^^^^ meta.string.js
|                                                                               ^ string.quoted.single.js punctuation.definition.string.begin.js
|                                                                                ^^^^^^^^^^^^^ meta.embedded.php
|                                                                                ^^^ punctuation.section.embedded.begin.php
|                                                                                   ^^^^^^^^ source.php.embedded.js
|                                                                                    ^^^^^^ variable.other.php
|                                                                                           ^^ punctuation.section.embedded.end.php
|                                                                                             ^ string.quoted.single.js punctuation.definition.string.end.js
|                                                                                              ^ string.quoted.double.html punctuation.definition.string.end.html
|                                                                                               ^ punctuation.definition.tag.end.html
