<?php /*
client@example.com
dev@example.com
contract-1447310344.php
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlYAAACWCAYAAAAc0saCAAAeYElEQVR4Xu2dC6x1R1XHvw9QW96FpghUepFHeCVgq6Ax9Lu8WhrBQsEmRCtfjQpGk1IiD1MNX2OtgjUFghaNgZIgCUiBKsUKhZ5iolBCMSpoW0pvUSul0GILAgrq+ts9drp7ztkze6/Ze885v0km59x7Zq9Z81t7n1lnHmv27yNBAAIQgAAEIAABCLgQ2O8iBSEQgAAEIAABCEAAAvtwrLgJIAABCEAAAhCAgBMBHCsnkIiBAAQgAAEIQAACOFbcAxCAAAQgAAEIQMCJAI6VE0jEQAACEIAABCAAARwr7gEIQAACEIAABCDgRADHygkkYiAAAQhAAAIQgACOFfcABCAAAQhAAAIQcCKAY+UEEjEQgAAEIAABCEAAx4p7AAIQgAAEIAABCDgRwLFyAokYCEAAAhCAAAQggGPFPQABCEAAAhCAAAScCOBYOYFEDAQgAAEIQAACEMCx4h6AAAQgAAEIQAACTgRwrJxAIgYCEIAABCAAAQjgWHEPQAACEIAABCAAAScCOFZOIBEDAQhAAAIQgAAEcKy4ByAAAQhAAAIQgIATARwrJ5CIgQAEIAABCEAAAjhW3AMQgAAEIAABCEDAiQCOlRNIxEAAAhCAAAQgAAEcK+4BCEAAAhCAAAQg4EQAx8oJJGIgAAEIQAACEIAAjhX3AAQgAAEIQAACEHAigGPlBBIxEIAABCAAAQhAAMeKewACEIAABCAAAQg4EcCxcgKJGAhAAAIQgAAEIIBjlXcP7Frxx1i+Zs1l97XPbrP8V3miKQ0BCEAAAhCAQO0EcKzyLPg/ecX37Vl55YXlWyxfbvkfMmVQHAIQgAAEIACBSgjgWKUbKsep+q6JvecK0Vfb/z9u+fOWr7X8xVa5+zXXfjRdNUr2JPCi5rqLel7PZRCAAAQgAIG7EMCxSr8hchyrVVL/2z64R2KVN1g5jXB9wPLFiddQLJ3Ava3oN5ri97HX/0i/lJIQgAAEIACB5QRwrMrcGbsm9oGWn2JZ75+e4VBJo2UOmBysKy1fYvnvyqi9VVJjR5nnYKtMT2MhAAEIlCNAh1KObVvyE+wfxzf5JRnVftPKHt4qf5P9fVWTv9w4WosMmRTdtw/HirtABM61/G3LZ4MDAhCAgAcBHCsPir4ydkzcruUXNK8PaIlfNZ0oB+vTOFvJxsCxSka1sQUPs5bph4vSQyzrGSJBAAIQGEQAx2oQvlEuloP1Yss/vaY2nK18U+BY5TPbtCvie+Cd1rjTNq2BtAcCEBifAI7V+Mz71Bh3AGeYgKMsH2v5RMurFsOnOFs32/V/a/mKPkpVfk3MlMXrlRuzh/pa//iZ5jrdC/oufJXl83rI4hIIQAAC/08Ax6qOmyF2AvSrWr+uQ9ppnCw5Wn2dLYV9WFi+zvIntsTRYsSqjnu/lJavMMHnt4Trnnil5TeWqhS5EIDA5hPAsarDxh8yNU9qVFVnoC//dSnH2Qq/1mN5wdFSvK1PWtbfm5ZwrDbNonnt0S7bk6NL4udAYU5+2/JH8kRSGgIQgMAdw9+k+RM4x1Q8q1HzU/b61B4qpzpby6YQdUxPiPnUo+pZXoJjNUuzjKbUd6ymEMQ33nmreGaKcaakUa03jaYRFUEAAhtBAMeqDjOeYmqG6OByCLQmKOxmGtKCOATEqVFHE2R+y97oV/tPDqlkptfiWM3UMCOp1ba/Rqhe29Qdj15dZv/TD5ttXIc4kimoBgKbRQDHqg577pia10eqPs3eK1iod4odLQU11f1xtHclM5GHYzUTQ0ykxjL775oumnYPcePi0atSz9xEzadaCECgFAEcq1Jk/eXq/MGwA5DdS8P5sitwOMOaJaxzrJeNXn3NGvsMy9pFS4IABCCwkgCOVT03x7tM1RCx/VJ7Hxaz19OCeWnKiNW87DG2Nl32j0evbjHlHmT5NsunW37f2MpSHwQgUA8BHKt6bPVyU/WCRl0tMNeCco91VvUQ8NW0q2P1rQ1pcyOQYn+d97mw/GTLt1o+wrJGjh9mmSjtc7Mo+kBgJgRwrGZiiAQ1tP7ps1E5bJcAbU2RlI51WA1cPWcCqVPBsXMVdswSpX3OlkU3CExMgM55YgNkVo8zkAkMx8oP2IZJynmW5FzdaFmL2jVipTAN2kH4+g1jQnMgAAEHAjhWDhBHFJHTGYyoVpVVwbJKs7kpnWv/XatZgUND0ujVoyzvuWmEIAhAYCMI4FjVZcbczqCu1o2rLSzH5T232vrYP+wWDHGumBKcm1XRBwIzIIBjNQMjZKjQpzPIEL9VRWG5Vea+W2P72l+xreIpwTPtb84W3O57idZD4C4EcKzquiH6dgZ1tXIcbVMXL4+jDbWMTaDvs7RrisZTgpLz45b/ZuwGUB8EIDBPAjhW87TLKq1wBvzs1bdj9dMASVMSGPIstacECR46pSWpGwIzI4BjNTODdKiDM+BnL1j6saxR0lD7hynBOHioAvjqSBwSBCCwxQRwrOoy/tDOoK7WltUWlmX5zl36UPvH8a2Cc6WdgsdZ5tibuVsf/SBQkACOVUG4BUQP7QwKqFStSFhWazoXxT3svyx4KNOCLuZBCATqJYBjVZftPDqDulpcTltYlmNbg2Qv+8fBQzlTsAbLoyMEChPAsSoM2Fm8V2fgrFaV4mBZpdnclPa0P2cKupkFQRConwCOVV029OwM6mq5v7aw9Gdak0Rv+3OmYE3WR1cIFCSAY1UQbgHR3p1BARWrETlku301jUTRlQRKPEucKcgNBwEI7MOxqusmKNEZ1EXAT1tY+rGsUVIpx3rXYMQBRLVT8EjLt9YICZ0hAIF8AjhW+cymvAJnwI/+3Fk+15p6P8tfiJr8CHv/n5Yv8cOwtZJK2r8dQPTXjPLvbC1pGg6BLSOAY1WXwUt2BnWRGK7tnFm+wpp3/pom7thnNwxHsNUSStv/m0b3sIbwzfZ6dOMUbzV0Gg+BbSCAY1WXlUt3BnXRGKbtHFmeZE06x/KxHU17p31+2rDmb/3Vpe1/uhF+m+VvWL6P5TdYfs3WUwcABLaAAI5VXUYu3RnURWOYtnNjqdENjXJ0pe9agXs2nbQ6a1I/AmPY/+9NtSc16slu97eso3BIEIDABhPAsarLuGN0BnUR6a/t3Fj+lzXlXk1z3myvZ7Satmt/x4uipf+zLX+sP4KtvrLU4vUYahi1Cv/7IXvDcTdbfdvR+G0ggGNVl5VDZ3B78+u3Lu3npe2cHKsnGJrPNng+aK/PX4GqvShaO82eZ/mv54W2Cm3Gsv93jIZGGJXOtPzGKuigJAQg0JsAjlVvdKNfuGM1Xt/UerG9vmB0DTarwrhjfYY1bTFh815udV/Q1P8z9vona3TRmp17W46PT/kl+/tdE+pfY9VjOVYfMDgnN4A0uvisGmGhMwQgkE4Axyqd1dQl5Ui9v1HibHs9NLVCldevKZknN214ob2qA5wqXWQVn9JU/jh7vXqNIkfZZxrV+hHLGrE6wrKchB3LX5yqARXWO5ZjFe/wVJ1aS6eQGSQIQGBDCeBY1WPYQ6bq6xp1px5hqYfaak0X9tGB5uOpHdXcTj52rnStnmN2CubdlbnM86TfWfop9vYzjfMrOxHTqi9JroNAJQRwrCoxlKkZOwIPt79vrEf1WWqqtS5hgfg77P3BCbXs08nLudLUsKYFw07B19r710/YjpqqHmPxeuBBTKua7gx0hcBAAjhWAwGOeLmOxpC9WLjuAz2eornCRO76iO0lpY9jpYqkc7xTUPfIoyzv9dJiuy7qy7wPpXZMKzn1WshOggAENpAAjlUdRo13jf2RqfyyOtTupeUJdpVGYD7a6+r0i2KnRGuTjlly6Yn2P8UeKn2szJBOvr1TkCnBtHtgCPO0Gu5aKo5pJQf4wZa/1kcQ10AAAvMmgGM1b/sE7XJ2jdXRoju0fI7lx1vWtJaijR/XvNdn11jWSNLnLGuh+cK5YWHtSxAbPws/YP98teVfWVOnoml7BXsc2slLj8MtMyWYfpMMZZ5e0x0lw6hVWBPHWqtcgpSHQCUEcKzqMNR7Tc0XNap27RqbU4uWHSQs/eRMadv5wRXK6hf9PVqf3df+VqgBz9TuXH/MhP+85Z9LqORpVubKhHIpRYIet1nhB6Rc0Cqza3+3g4fqAGdvXj1Um+0lYztWAsFaq9neDigGAT8COFZ+LEtKmqITGNqeroOEc+XrF/+FuRd1lI+5PtTK/luG/FdZ2fMyyq8qGo+cvckKiVufFKYEw7VPtDca7SMtJzDm4vWgAecHcjdCYAsI4FjVYeSaHCuNUp1rWcd3dCVNXX3Y8lVR1i6345t8qr2GqNULe68wE54p5qoI2eFImevs/W9ZfnurMgXhfEnzP40QPdNBmXh34iNN3t4AmfGxODqkWeutSMsJTPVMcX4gdyQENpwAjlUdBp6qE8ilo7VJqUEql52H167vkP1DsbsUUPF7LQ91PNryY67hMx1s/JoVDY/XuqnIkZa/mgupVf4r9rcWMsuZe/RAWR+y609qZJxvr68cKG+TL5/qmeL8wE2+q2gbBIwAjlUdt8FUnUAunfhctGWOk0amlNThLxKE71gZxWoK6a32Rse3eKW2Y6WI51rDtirFuzNVZujzE0fT95jqPMd0OqtR/lP2+lQvUBsoZ8pnqrbzAzWtrDAvqT+aNvB2oUkQSCcwtGNIr4mSQwhM2Qmk6q1z0MJUXdd5d6kyVS4+a02L2sPUYI6MVWXbjpVGey7tEOxpiwutrpc29XmMxulYHB2PoyQ9tXNRC6ZJdyfgacdcvvE9rVHGn8gVMGJ57TbV2kNtqtAPj49b/h7L/2L5N0bUY0hV+l7S6HLpsClDdOTaDSKAY1WHMeNOoMTuuKEUdMhsOGvv9+39ujAFuXXFozq6Vmu3FH7BI8VctYNObLuSZ4f8batMU5xKHs/ijsmJR/g8dy52cantc0875rY93tjh/WMhV5eu8nKg5JRo/WH7R41Ckvxul4AJPlcYF4VvUbDcXcuPWaODnpkbJtCRKjeYgMeX+QbjmU3TQifwddNI2+jnlkp3UvHUiceUWeAX650aeNWzrUGWvtj1Be+RtCEghKrw2rnoodfcZHjaMbdt7RhqHqOVuTqkllcQ03UhQP7CPtcxSoo5N3XSGk+tj/zlDEUIqJsBi6JpBHCs0jhNWaqGqOulO6mFGeBAY4QhIQnadoz1Tp2+jK85wgT2jZ79QLv21kYhyZAsjxTvXFT0+md7CN1AGbEdPYO9pqKKfyxoqkr3+JxSyu5eBabVLl6x1Ou3JmqAYuLp+T2YWT8BdTOBUTyNAI5VGqcpS9UQdb20Y3XIDKDdgUqei7JjvVOnGONrzjZ9pFufFDtWut7rWYzvF+n6MMtf6qPghl9T+p7twrewAuHHwpD7qKuePp+3d/fKAXmPZa2vUlYoDx34HafU56ePPuuu0Wha+8eNnNY/jfRtx3Pbtc8uj4Ryxqa3VbZcnteX+ZZjLNr8d5t0xXNSOsbyHHfmlO6k2uusvEYY+ugdX6MvdE3j9B216lN/183W3rk4t067S/+xPi/BPkf3OH7ZO+zCgzkXFy7btbtX1cs5ucxyWHelQ6XVprFTHLttVfy5ZTpxxubYltqi+nCsyhl7pxG9N7CK8MWhYXbt0JljKj2tIpbxomyv+7ZP56oO8O2WZY/DLP+B5Zw1HbH9+tSfYv+4Yxzq/KXUV2OZUuxTWRyygmEU9pP2/kdTLyxcLmd3b7y7UddpSm7M9AtWmdZGKsmpk3OXk9pnbLImMYceZVcS8OqgQHx3AurQ9OU9ZERjx64PDsXF9l4jN3NMY3RSJeroK3PPjKDRQyXJ+H7LX+5hmFIO6UHTJXb+vHdq9mjq7C7pa3uvhuyaoHg6ag7fxYov93tNA1PumXh345DnoC/TEFz3H02ARmpzU9sGuv4hPZ/l3Lopv8EE5vAwbyJehQPQVl9t39evuhf2bGQ8BTbnKZ0xOqkSdfSVGRwXXa9nqO/Oor71p9xOe1YoOH8q7zV9mlJ3DWVKsk9p/44Vikdhp1qjFHRVLK0/b+7n1MPAw+7Goc9BCq92mV+1f4RQD/p+DeFecmXFZ2ymtju3DspvGQEcqzIGD52a4hR9n2XFddIvwNx0yC4I0wVz3DkU2jNGJ1WijiEy29MIWsyrbec5aUj9XfUctAIatQqJZ/2uxEqy77JN+HwuEdh/0RTSlLbWS0knBQBNTe3nYKy1VoHdv5ui2gjSN9Ww67pv27huIgJ82ZYBv2ti42F+1dJnxGBh1x1oVByytb9MK++UOkYnFdehrd0eEcWH6N22sWQpxpgCjaamIfWn1FFafooOcy1Taho2p73xGqWpQmP8uin8m43SCv+hI51yprXbz4F2EGqnXs5zkMNMZRU7S+EglBT88/O5AqLyNey6HtA8Lp2CAI5VOerxrh/V0od1CPaoX4VyzOaaSnfgmqb4YNP4f7XXo51ADNU7nkaQSrmRzofW34WhtPyu+uf8+RzYxGuUxKrPj6++jHV8k86WVIRyJR10rjALOU5VqLv9HJSc1pRDJcdKySOm3acjBo+39//UFyjXQSAQ6NPZQy+NwNA4RTtWTViDMeeF66IRd1K5zkUXTf2ifItlTVPI0dTRGl7JY9RCHVKYOsndVVS6cy8t38sOU8iZA5t2BPaxvo/vb8A1hRaSliw8wnIfpyrIGGtaU7txtbxCu6XDcVB97p/j7SL9+JUTqHSTZW1CIUFgMIGxHuTBilYqYMiXdy0L12WauJ25zsU602pR6vuaArfYq35RDvnyb9c1xD5BVhzpfGH/1Fq41ORR/7q6PBzH1LbUVq40+1QeU+gRx356syl6Rqqya8rF05qlDpbesfrDj00FCpbu2hEYJ01BPtGyQtPEn8lx1LThoy1recVjo4u8f7A54EREzQRwrMpab8iX5iFT7XWNenNeuC4VhzgXqywQ71IaMk2xzsJD7BPktiOdazondf2XR/2l21f2CZlOemn2qS0bW4849lOfDRer2tUOvRDOq0zlkFKuHSg45ZquMl6OZVc9fL5FBHCsyhp7yJfmovllJQ0fbvnGsqoOkt52LnZM2pAI8XKq9AtY036aYlD7PUeqQmOH2CfIaEc6z5kK9agfx6rfrTuX0bzS90Cbzs32jyMt9439tIp2PK15uxXSdKN3OmQCw4/NZbLDLuyUejVqd4LlRUphykAghwCOVQ6t/LJD1h7p/CrZp9SXVH5rVl/Rdi76xnVSDfGaqhLTf3ErvDq1eH1JzlSoV/2rLFNavuc9NLasubAZU4+XGeS3NqD140VTdl4pdqxKHdGjcwqfvkbha+0zTfctS13nB3pxQA4Eeu1UA1s6gb5rj2qMrRIWcYcT43McjEC09JqqtuW8OrW+U6Fe9eNYpT+ToWRp9qkaBT00fawwIiVTWPitZ1ULwD1TPBV4ugm+0FN4I2suNivQNERuEgFGrMpas2+HW2NslV1DeXmEU1+COiIj9WDWMdZUrXOshmx177vOqnRHEcvXKQAlYwuVfZL8pZdmn6LxjhUKi7FL7/wtPaL0Z9aW5zeNLhW2YA42S7ErZbacAI5V2Rugb4ernXDhGJxj7P2Q9UplW3hX6e0T4/WpnK1zLV+2RpGx1lStc6yGPAt911mV7iiC/K9bwxW8lHQngdLsU1iPufO39IhSWLqgtZA6b69EmoPNSrQLmRtGYEhnsmEoijSnT4er+FdftaxdNTrIWRHXa0rhiAvprPdhekOxqN5g+Z9bjTlof/+xZcWpKr2mqs3R84u6zzorz/rbbatxOnnM+3wOi9cPWYPDYuzSO3/jEaUftnoVGNMrxTsNvdduxTqWfF68WCAHAqyxGuEeyO1wdbTFMxu9HmmveyPo6F1FHIlZX4axA3+h/a1DqhVrRu3UYdVKYztVqtPzizqe9tUoXbDhOrZx/eLxOUdD1Did7Nj8TlGetu+sbEWBa+z/YbF16Z2/8ffQkM0ly5ryFfvngy177zRs1zUHm/W1NddtEQFGrMobO+5wu84De56poxPmlc6zrAXgtaZdU1xHTxzWNECRnnWG2LJUKk5VFzvPL+rYkVG92tKukcd1KQ7UeJoVVIfnld5tgk5thJVa8+Kl6xRyPG2fq/9z7AKN3mrdk5Km+jXlXzK1D0vus7lkmX5qR/ie0vIFhUkplWKblTw2p5T+yN0SAjhW5Q3dXmf1aqtSTlM7xVOAt9mHq5yQ8hr71qAdQlrE/qQVYqdyqqSO53RQe9o35dnSdned2aZ0fsPJi34t50x6tTdXzlSOlaKcxxs6SuzQW8Zi1/45ZHPJMpnxhhMd4PygXCNklo9tdmaLY6YoikOgHIGUL/9ytW+H5NDhxlNiV1rTdQBqHPRTHatitKjcD1re2zA8crD+sGnTe+1VMWmUPae/cpF5d6658nQPnNUofZW9HpfbgBXlWV/VDTLXVt0S15fQ2XQ6NDiMUqn02FG/V20u0f8/ktlArau6wHKJMzxXqRIfm/MxK/SsTJ0pDoFRCOBYjYL5/06ODwf1dkUH9jixfZxW1V+Ld+eaK+8UQ3hRhFEL/VOPw1lHn/VV3fem52jlc6067br8QlTturPp9H1wouVFt5ruJVZtLtGuQX33pCT9GNCPAqUx10a2j83RocklTmRIYUAZCKwkgGM13s1xyKoKO4BW1TrGcPp4LZ5/TbmOUFeLcuXtmMDrG6Geto/XVz3O5F/dpfgWfp5rq1WI4s4+BePYo1TLdFq1uURThfqe0kjysqRRN01jan2Tkn4kyoEcy7kJsbjC6L/3IvwU+1EGAp0EcKw6EbkWiIP0tQXrSyos9HatFGErCXh1rqGCPvLCNZ7PYlhfpUjbh2P/pQT62CoWdKBxMuKpvXWo53Y23a4pqzV+4f6IQ6Not+IVlvWq9FjLaq9eQ5pqbWSpRfg8JhBwI+D5Ze6mFIIgMBKBoZ1rW80gTzGDTh6pDe1qduwfYRRM04wvnkiPuVe7yvYa4VMU/jhpVOZoywp8eaxlrYU7qqOBtZxN1x69EhfF0FuXphx12zXF4kX40lMBld9m+ZK533Totx0EcKy2w860cjkBb0dI8nQQbPzLfmz28botrYVR1HvS3Qksc6y0xi332J8pnQwvu8pZ+bDlsA50ldy5jLotW4QvnTXCphAvCnGjDUIkCExCAMdqEuxUOhMCc3CEvFHEOw0VyuFS7wo2RN4yxyr+X1czNSKleFSLroIVfa7dpFpHpRxioL3H3s9hB28bYzhQOvz/dnsTH9sUpjOvs/9/wrKmNlelHftATvWUO5Qruk1QtYsAjlUXIT6HQF0E/tLUPaFRWVNXYy0srovSnTHM4mnbVY6V1qxpREchMULeq63BG6iv4mi91PJPtdqmcwvb05kaSV5YlsOlnbcPtaxpXWU9J3LM9OqxK3cDUdOkHAI4Vjm0KAuB+RP4UtNBEOdnva02cbRy/ndnGQ21/u1nLZ9t+V5LqljmaMXF9Pn7LbMesYx9tk4qjtXWmZwGbzgBOVZKivFDgsC2EWhPZyqAaVe6ieelCxGf5xDAscqhRVkIQAACEKiJQNvRUp+n6XKmdWuyYmW64lhVZjDUhQAEIAABCEBgvgRwrOZrGzSDAAQgAAEIQKAyAjhWlRkMdSEAAQhAAAIQmC8BHKv52gbNIAABCEAAAhCojACOVWUGQ10IQAACEIAABOZLAMdqvrZBMwhAAAIQgAAEKiNQnWN14MCBnGMnKjMH6kIAAhCAAAQgEAjs37//2sViMeX5q9nGwLHKRsYFEIAABCAAAQiMQQDHagzK1AEBCEAAAhCAAARmSqC6EauZckQtCEAAAhCAAAQgsA/HipsAAhCAAAQgAAEIOBHAsXICiRgIQAACEIAABCCAY8U9AAEIQAACEIAABJwI4Fg5gUQMBCAAAQhAAAIQwLHiHoAABCAAAQhAAAJOBHCsnEAiBgIQgAAEIAABCOBYcQ9AAAIQgAAEIAABJwI4Vk4gEQMBCEAAAhCAAARwrLgHIAABCEAAAhCAgBMBHCsnkIiBAAQgAAEIQAACOFbcAxCAAAQgAAEIQMCJAI6VE0jEQAACEIAABCAAARwr7gEIQAACEIAABCDgRADHygkkYiAAAQhAAAIQgACOFfcABCAAAQhAAAIQcCKAY+UEEjEQgAAEIAABCEAAx4p7AAIQgAAEIAABCDgRwLFyAokYCEAAAhCAAAQggGPFPQABCEAAAhCAAAScCOBYOYFEDAQgAAEIQAACEMCx4h6AAAQgAAEIQAACTgRwrJxAIgYCEIAABCAAAQjgWHEPQAACEIAABCAAAScCOFZOIBEDAQhAAAIQgAAEcKy4ByAAAQhAAAIQgIATARwrJ5CIgQAEIAABCEAAAjhW3AMQgAAEIAABCEDAicD/AiX/CeL+q23dAAAAAElFTkSuQmCC

###################################
1. If you got this file from GitHub and its name is still contract.php, you should RENAME the file to something harder to guess.
The 4th line is a timestamp outputed by the online generator and an example of a more secure filename.

2. The 2nd and 3rd lines (the emails) are read by this PHP script (from itself).
When a signature is submitted, this script will send both parties an email with a link to the signed contract.

3. The 5th line ($lines[4] below) is the data for $DEV_SIGNATURE.
If you got this file from GitHub, the default developer signature just says "John Doe".
You can generate a new signature @ http://cdpn.io/JYpjvE and replace the data above.

4. The $CLIENT_SIGNATURE is received by this script from itself when Client signs the contract.
*/
$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? stripslashes ( $_POST['client_signature'] ) : null;
// TODO: Can base64 data (PNG image) be sanitized? Does it need to before being used in the final HTML?
if ($CLIENT_SIGNATURE) $CLIENT_SIGNATURE = '<img id="hk" src="' . $CLIENT_SIGNATURE . '" >';

$lines = file(__FILE__);
$clientEmail = trim($lines[1]);
$devEmail = trim($lines[2]);
$DEV_SIGNATURE = trim($lines[4]);
$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { $selfDelete = 0; }
else { $selfDelete = 1; }

/**
The HTML code (and some PHP) is kept in PHP variables like $HEADER, $CONTRACT_HTML, $FOOTER_UNSIGNED, and $FOOTER_SIGNED_PHP.
**/
$HEADER ='<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Signed Contract</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="robots" content="noindex">
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body {
    font-family: "Libre Baskerville", serif;
    font-size:16px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:14px; }
}
@media print {
   .noprint { display:none !important; }
}
.hidden {
    display:none;
}
#content {
    max-width: 600px;
    margin: 0 auto;
    margin-bottom: 3em;
    padding: 0 2em;
    background: #fff;
}
h1 {
    font-size: 2em;
    line-height: 1.2em;
    letter-spacing: 0.15em;
    font-family: "Arapey", serif;
    font-weight: normal;
    margin: 1em 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    border: solid 1px;
    border-width: 1px 0;
    padding: .5em 0;
}
h2 {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:700;
}
#signature {
    width:auto;
    border:dashed 2px #53777A;
    margin:0;
    text-align:center;
}
#hk,
#dev_signature {
    max-width:333px;
    display:block;
}
#date-ip {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:400;
}
#print-pdf {
    text-align:center;
    padding:1.5em 0;
    margin-top:2em;
    border-top:solid 1px #ccc;
}
.buttons {
    text-align:center;
    margin:1.5em auto;
}
button {
    margin: 0 .5em;
    font-size:1.2em;
    line-height:1.5em;
    font-family: "Open Sans Condensed",sans-serif;
    font-weight: 700;
    text-transform:uppercase;
    color: #0a3666;
}
button:hover {
    color: #136fd2;
}
</style>
</head>

<body>

<div id="content">

';
$CONTRACT_HTML='<h1>Contract of work for website design and development</h1>
<p>Between <strong>Alice</strong>, referred to below as "Designer", and <strong>Bob</strong>, referred to below as "Customer".</p>
<h2>1. Agreement of parties</h2>
<p>Customer hires Designer to redesign the current website, <strong>bobswebsite.com</strong>, for the estimated total price of <strong>$PRICE</strong>. Designer agrees to provide quality service and to answer to the Customers requests in a timely manner.</p>
<p>The agreed payment plan is at the end of the document.</p>
<h2>2. Legal matters and copyrights</h2>
<p>The Customer will guarantee to the Designer that any elements of text, graphics, photos, trademarks or other artwork that the Customer provides for inclusion in the website are either owned by him or that he has the permission to use them. When the Designer receives the final payment, copyright is automatically assigned as follows: Customer will own the graphics, virtual elements, text content photographs and other data provided, unless someone else owns them. The Designer owns the XHTML markup, CSS and other code and he licenses it to the Customer for use on only this project. Designer can reserve the right to display, with Customer\'s consent, the work as part of the portfolio.</p>
<h2>3. Term and termination</h2>
<ol style="list-style-type: lower-alpha;">
<li>This contract shall commence upon the first payment, as outlined in the payment plan and shall remain effective until the services are completed and delivered.</li>
<li>This contract may be terminated at any time by either party effective immediately upon notice, or the mutual agreement of the parties.</li>
<li>In the event of termination, Designer shall be compensated for the service performed through the date of termination in the amount (a) any advanced payment, (b) a prorated portion of the fees due, or (c) hourly fees for work performed by the Designer at the time of the termination, whichever is greater, together with any additional costs incurred trough and up to the date of cancellation.</li>
<li>This Contract may be modified by parties; any modification must be in writing.</li>
<li>All notices to be given hereunder shall be transmitted in writing by electronic mail and will only be effective upon return confirmation.</li>
</ol>
<h2>4. Force majeure</h2>
<p>Designer shall not be deemed in breach of this contract if Designer is unable to complete the services or any portion by reason of fire, earthquake, labor dispute, illness, internet breaches or any technical issues that may appear beyond Designer\'s control. Upon occurrence of any Force Majeure Event, Designer shall give notice to the Customer of his inability to perform or of delay in completing the services and shall propose revisions to the schedule for completion of the services.</p>
<h2>5. Payment plan</h2>
<p>Payment shall be done as follows:</p>
<ul>
<li>50% of total estimated fee will be required to commence work, after this contract has been approved and signed by both parties.</li>
<li>50% upon project closure.</li>
</ul>
<p>Any extra time required outside the project timeline/services mentioned at point 1 of this contract, will be billed at a rate of <strong>$FEE</strong> per hour.</p>
<h2>Both parties agree to the terms stipulated above:</h2>';
$FOOTER_UNSIGNED = '
  <form method="post" class="noprint" id="signature_form">
    <div id="signature">
      <!-- Client Signature Canvas -->
    </div>

    <div class="buttons">
      <button id="reset" type="button">Reset</button>
      <button id="submit" type="submit">Done &rarr;</button>
    </div>

    <input type="hidden" id="client_signature" name="client_signature" />
  </form>

</div> <!-- #content -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- https://github.com/brinley/jSignature/blob/master/README.md -->
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>
<script>
$(document).ready(function() {
  $("#signature").jSignature();
  var $sigdiv = $("#signature");
  var datapair = $sigdiv.jSignature("getData", "svgbase64");

  $("#signature").bind("change", function(e) {
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val(data);
  });

  $("#reset").click(function(e){
    $("#signature").jSignature("clear");
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val("");
    e.preventDefault();
  });

  $("#submit").click(function(e) {
    $("#signature_form").slideUp(200);
    //$(".buttons").slideUp(300);
    $("#signature_form").after("<img id=\"hk\" class=\"hidden\" />");
    var data = $("#signature").jSignature("getData");
    $("#hk").attr("src", data );
    $("#hk").slideDown(200);
    // Loading text
    $("#dev_signature").css("opacity",".625")
    $("#content").css({"color":"#aaa","list-style-color":"#aaa !important"}).append("<div id=\"loading_area\"></div>");
    $("#loading_area").append("<h2 id=\"loading\" style=\"text-align:center; color:green; display:none;\">Saving Contract…</h2>");
    $("#loading_area").append("<p id=\"loading2\" style=\"text-align:center; color:#222; display:none;\">This shouldn\'t take more than a minute.</p>");
    $("#loading").slideDown(300, function() {
		 		$("#loading2").delay(2000).slideDown(300);
  	});
	});
});
</script>
</body>
</html>';

if ($CLIENT_SIGNATURE) { $FOOTER_SIGNED_PHP ='
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";
  ?>

  <div id="date-ip">
    <strong>Signed on:</strong> <?php echo date("j F Y"); ?>
    <br><strong>IP address:</strong>
    <?php echo get_client_ip_env(); ?><br>
  </div>

  <?php // Function to get the client ip address
  function get_client_ip_env() {
  	$ipaddress = "";
  	if (getenv("HTTP_CLIENT_IP"))
  		$ipaddress = getenv("HTTP_CLIENT_IP");
  	else if(getenv("HTTP_X_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_X_FORWARDED_FOR");
  	else if(getenv("HTTP_X_FORWARDED"))
  		$ipaddress = getenv("HTTP_X_FORWARDED");
  	else if(getenv("HTTP_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_FORWARDED_FOR");
  	else if(getenv("HTTP_FORWARDED"))
  		$ipaddress = getenv("HTTP_FORWARDED");
  	else if(getenv("REMOTE_ADDR"))
  		$ipaddress = getenv("REMOTE_ADDR");
  	else
  		$ipaddress = "UNKNOWN";
  	return $ipaddress;
  } ?>

  <div class="noprint" id="print-pdf">
    <button id="print" type="button" class="button-secondary" onclick="printContract()">
    Print contract
    </button>
    <button id="pdf" type="button" class="button-secondary" onclick="generatePdf()">
    Download as PDF
    </button>
  </div>

</div> <!--#content-->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
function printContract() {
  window.print();
}
function generatePdf() {
  // http://pdfcrowd.com/save-to-pdf/
  window.location.href = "//pdfcrowd.com/url_to_pdf/?use_print_media=1&height=-1&pdf_name=<?php echo $pdfName; ?>";
}
</script>

</body>
</html>';
} else $FOOTER_SIGNED_PHP = null;


if($CLIENT_SIGNATURE==null) {
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }
  /** Waiting for Client to sign: include signature elements and javascript **/
  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER_UNSIGNED .'<?php ');
}
else {
  /** Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file **/
  file_put_contents($htmlName, $HEADER);
  file_put_contents($htmlName, $CONTRACT_HTML, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $DEV_SIGNATURE, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $CLIENT_SIGNATURE, FILE_APPEND | LOCK_EX);
  ob_start();
  eval($FOOTER_SIGNED_PHP); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  $FOOTER_SIGNED_COMPILED = ob_get_contents();
  ob_end_clean();
  file_put_contents($htmlName, $FOOTER_SIGNED_COMPILED, FILE_APPEND | LOCK_EX);

  // Email client & dev, delete php, redirect to html
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.';
    mail($clientEmail,'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.</p>';
    $msg.= 'The contract was signed by: ' .$clientEmail;
    mail($devEmail,'Contract signed!', $msg, $headers);
  }
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}

// Get the current file URL and replaces the .php extension with .html
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}
?>
