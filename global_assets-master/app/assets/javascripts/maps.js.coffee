# Integrations for SBK's map service
jQuery ($) ->
  if $("body.test, body.development").length then mapEnv = "test" else mapEnv = "prod"

  # Used for iframe with single POI
  urlForInlineMap = (streetAddress) ->
    # encodeURI "//xyz.malmo.se/mkarta/init/map-1.00.htm?mapmode=basic&poi=#{streetAddress}&zoomlevel=3&maptype=Karta&env=#{mapEnv}"
    encodeURI "//kartor.malmo.se/temakarta/?config=tema_adress.js&poi=#{streetAddress}"

  # Used for full map with single POI
  urlForFullMap = (streetAddress) ->
    encodeURI "http://www.malmo.se/karta?poi=#{streetAddress}&zoomlevel=4&maptype=karta"

  # Rewrite href attr on load to enable right click open in full map
  $("[data-poi]").attr "href", ->
    urlForFullMap($(@).attr("data-poi"))

  # Replace `data-map-selector` contents with the iframe and set the src from `data-poi`
  $("body").on "click", "[data-poi]", (event) ->
    event.preventDefault()
    $selector = $($(@).attr("data-map-selector"))

    if $selector.length

      # Map exists, remove it
      if $selector.find("iframe").length
        $(@).text("Visa på karta")
        $selector.empty().hide()

      # Create map
      else
        $iframe = $('<iframe scrolling="no" frameborder="0" src=""></iframe>')

        $(@).text("Dölj karta")
        # Set selector position to relative so we can place the close link on it
        $selector.css("position", "relative") if $selector.css("position") is "static"

        # Inject the iframe
        $selector.show().html($iframe.attr("src", urlForInlineMap($(@).attr("data-poi"))))

        # After injection, scroll to the top of `data-scroll-to` or the $selector
        if $(@).is("[data-scroll-to]")
          $('html, body').animate
            scrollTop: $($(@).attr("data-scroll-to")).offset().top - 45
          , 100

  # Show theme map
  $(".theme-map button").click ->
    $box = $(@).parent()
    $box.addClass("show")
      .append $("<iframe scrolling='no' frameborder='0' src='#{$(@).attr("data-url")}'></iframe>")

    # Place a close link on the map
    $box.prepend("<a href='#' class='close-map m-icon-close'>Stäng</a>")
      .find("a").click (event)->
        event.preventDefault()
        $box.removeClass("show").find("iframe, a.close-map").remove()
