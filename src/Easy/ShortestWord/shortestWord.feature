Feature: ShortestWord - Easy
  Scenario Outline:
    When given a <string of words>
    Then return the <length of the shortest word(s)>

    Examples:
      | string of words                         | length of the shortest word(s) |
      | "bitcoin take over the world maybe who knows perhaps"                | 3 |
      | "turns out random test cases are easier than writing out basic ones" | 3 |
      | "a string of words"                                                  | 1 |
      | "turnsout randomtest casesare easierthan writingout basic ones"      | 4 |
