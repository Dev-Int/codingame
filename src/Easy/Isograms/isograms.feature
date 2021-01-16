Feature: Isograms - Easy
  Scenario Outline:
    Given an isogram is a word that has no repeating letters, consecutive or non-consecutive
    When I write a <word>
    Then the result is <result>

    Examples:
      | word            | result |
      | Dermatoglyphics | true   |
      | isogram         | true   |
      | aba             | false  |
      | moOse           | false  |
      | isIsogram       | false  |
      | ""              | true   |
      | PpKNujMhrMcsNAJqyAQbsLohyyxlfrxmmd | false |
