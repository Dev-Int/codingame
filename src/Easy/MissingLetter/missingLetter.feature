Feature: MissingLetter - Easy
  Scenario Outline:
    Given an array of consecutive and increasing letters
    And only one letter missing
    And the array length is always at least 2
    When pass an <array>
    Then return <missing letter>

    Examples:
      | array | missing letter |
      | "a,b,c,d,f" | "e" |
      | "O,Q,R,S"     | "P" |
